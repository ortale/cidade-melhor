<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RequestTypes Controller
 *
 * @property \App\Model\Table\RequestTypesTable $RequestTypes
 */
class RequestTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $requestTypes = $this->paginate($this->RequestTypes);

        $this->set(compact('requestTypes'));
        $this->set('_serialize', ['requestTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Request Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requestType = $this->RequestTypes->get($id, [
            'contain' => ['Requests']
        ]);

        $this->set('requestType', $requestType);
        $this->set('_serialize', ['requestType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requestType = $this->RequestTypes->newEntity();
        if ($this->request->is('post')) {
            $requestType = $this->RequestTypes->patchEntity($requestType, $this->request->data);
            if ($this->RequestTypes->save($requestType)) {
                $this->Flash->success(__('The request type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The request type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('requestType'));
        $this->set('_serialize', ['requestType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Request Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requestType = $this->RequestTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requestType = $this->RequestTypes->patchEntity($requestType, $this->request->data);
            if ($this->RequestTypes->save($requestType)) {
                $this->Flash->success(__('The request type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The request type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('requestType'));
        $this->set('_serialize', ['requestType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Request Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requestType = $this->RequestTypes->get($id);
        if ($this->RequestTypes->delete($requestType)) {
            $this->Flash->success(__('The request type has been deleted.'));
        } else {
            $this->Flash->error(__('The request type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
