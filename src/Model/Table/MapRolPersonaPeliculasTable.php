<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MapRolPersonaPeliculas Model
 *
 * @method \App\Model\Entity\MapRolPersonaPelicula get($primaryKey, $options = [])
 * @method \App\Model\Entity\MapRolPersonaPelicula newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MapRolPersonaPelicula[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MapRolPersonaPelicula|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MapRolPersonaPelicula patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MapRolPersonaPelicula[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MapRolPersonaPelicula findOrCreate($search, callable $callback = null, $options = [])
 */
class MapRolPersonaPeliculasTable extends Table
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

        $this->table('map_rol_persona_peliculas');
        $this->displayField('idRol_Persona_Pelicula');
        $this->primaryKey('idRol_Persona_Pelicula');
        $this->hasMany('MapPersonas', ['foreignKey' => 'fk_idPersona']);
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
            ->integer('idRol_Persona_Pelicula')
            ->allowEmpty('idRol_Persona_Pelicula', 'create');

        $validator
            ->allowEmpty('cancion');

        $validator
            ->allowEmpty('personaje');

        $validator
            ->integer('fk_idPelicula')
            ->requirePresence('fk_idPelicula', 'create')
            ->notEmpty('fk_idPelicula');

        $validator
            ->integer('fk_idRol')
            ->requirePresence('fk_idRol', 'create')
            ->notEmpty('fk_idRol');

        $validator
            ->integer('fk_idPersona')
            ->requirePresence('fk_idPersona', 'create')
            ->notEmpty('fk_idPersona');

        return $validator;
    }
}
