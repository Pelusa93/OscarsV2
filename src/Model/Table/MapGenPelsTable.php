<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MapGenPels Model
 *
 * @method \App\Model\Entity\MapGenPel get($primaryKey, $options = [])
 * @method \App\Model\Entity\MapGenPel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MapGenPel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MapGenPel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MapGenPel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MapGenPel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MapGenPel findOrCreate($search, callable $callback = null, $options = [])
 */
class MapGenPelsTable extends Table
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

        $this->table('map_gen_pels');
        $this->displayField('fk_idGenero');
        $this->primaryKey(['fk_idGenero', 'fk_idPelicula']);
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
            ->integer('fk_idGenero')
            ->allowEmpty('fk_idGenero', 'create');

        $validator
            ->integer('fk_idPelicula')
            ->allowEmpty('fk_idPelicula', 'create');

        return $validator;
    }
}
