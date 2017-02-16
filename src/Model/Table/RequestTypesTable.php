<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RequestTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Requests
 *
 * @method \App\Model\Entity\RequestType get($primaryKey, $options = [])
 * @method \App\Model\Entity\RequestType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RequestType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RequestType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RequestType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RequestType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RequestType findOrCreate($search, callable $callback = null, $options = [])
 */
class RequestTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('request_types');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Requests', [
            'foreignKey' => 'request_type_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->requirePresence('icone', 'create')
            ->notEmpty('icone');

        return $validator;
    }
}
