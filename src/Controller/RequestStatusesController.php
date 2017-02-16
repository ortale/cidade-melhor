<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RequestStatuses Controller
 *
 * @property \App\Model\Table\RequestStatusesTable $RequestStatuses
 */
class RequestStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $requestStatuses = $this->paginate($this->RequestStatuses);

        $this->set(compact('requestStatuses'));
        $this->set('_serialize', ['requestStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Request Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requestStatus = $this->RequestStatuses->get($id, [
            'contain' => ['Requests']
        ]);

        $this->set('requestStatus', $requestStatus);
        $this->set('_serialize', ['requestStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requestStatus = $this->RequestStatuses->newEntity();
        if ($this->request->is('post')) {
            $requestStatus = $this->RequestStatuses->patchEntity($requestStatus, $this->request->data);
            if ($this->RequestStatuses->save($requestStatus)) {
                $this->Flash->success(__('The request status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The request status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('requestStatus'));
        $this->set('_serialize', ['requestStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Request Status id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requestStatus = $this->RequestStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requestStatus = $this->RequestStatuses->patchEntity($requestStatus, $this->request->data);
            if ($this->RequestStatuses->save($requestStatus)) {
                $this->Flash->success(__('The request status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The request status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('requestStatus'));
        $this->set('_serialize', ['requestStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Request Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requestStatus = $this->RequestStatuses->get($id);
        if ($this->RequestStatuses->delete($requestStatus)) {
            $this->Flash->success(__('The request status has been deleted.'));
        } else {
            $this->Flash->error(__('The request status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
