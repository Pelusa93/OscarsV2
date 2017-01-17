<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MapPersonas Model
 *
 * @method \App\Model\Entity\MapPersona get($primaryKey, $options = [])
 * @method \App\Model\Entity\MapPersona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MapPersona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MapPersona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MapPersona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MapPersona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MapPersona findOrCreate($search, callable $callback = null, $options = [])
 */
class MapPersonasTable extends Table
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

        $this->table('map_personas');
        $this->displayField('nombre');
        $this->primaryKey('idPersona');
        $this->belongsTo('MapLugarDireccions', ['foreignKey' => 'fk_idLugar_Direccion'
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
            ->integer('idPersona')
            ->allowEmpty('idPersona', 'create');

        $validator
            ->requirePresence('nombre1', 'create')
            ->notEmpty('nombre1');

        $validator
            ->allowEmpty('nombre2');

        $validator
            ->requirePresence('apellido1', 'create')
            ->notEmpty('apellido1');

        $validator
            ->allowEmpty('apellido2');

        $validator
            ->date('fnac')
            ->requirePresence('fnac', 'create')
            ->notEmpty('fnac');

        $validator
            ->requirePresence('biografia', 'create')
            ->notEmpty('biografia');

        $validator
            ->requirePresence('genero', 'create')
            ->notEmpty('genero');

        $validator
            ->requirePresence('raza', 'create')
            ->notEmpty('raza');

        $validator
            ->date('fecha_muerte')
            ->allowEmpty('fecha_muerte');

        $validator
            ->allowEmpty('nombre_artistico');

        $validator
            ->date('fecha_inicio_carrera')
            ->allowEmpty('fecha_inicio_carrera');

        $validator
            ->integer('fk_idLugar_Direccion')
            ->requirePresence('fk_idLugar_Direccion', 'create')
            ->notEmpty('fk_idLugar_Direccion');

        return $validator;
    }
}
