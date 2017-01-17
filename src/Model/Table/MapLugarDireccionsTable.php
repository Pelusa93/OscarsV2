<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MapLugarDireccions Model
 *
 * @method \App\Model\Entity\MapLugarDireccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\MapLugarDireccion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MapLugarDireccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MapLugarDireccion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MapLugarDireccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MapLugarDireccion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MapLugarDireccion findOrCreate($search, callable $callback = null, $options = [])
 */
class MapLugarDireccionsTable extends Table
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

        $this->table('map_lugar_direccions');
        $this->displayField('nombre');
        $this->primaryKey('idLugar_Direccion');
        //$this->hasMany('MapLugarDireccions', ['foreignKey' => 'fk_idLugar_Direccion']);
        $this->hasMany('MapPersonas', ['foreignKey' => 'fk_idLugar_Direccion']);
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
            ->integer('idLugar_Direccion')
            ->allowEmpty('idLugar_Direccion', 'create');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->allowEmpty('nacionalidad');

        $validator
            ->allowEmpty('idioma');

        $validator
            ->integer('fk_idLugar_Direccion')
            ->allowEmpty('fk_idLugar_Direccion');

        return $validator;
    }
}
