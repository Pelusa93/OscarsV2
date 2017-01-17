<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MapPeliculas Model
 *
 * @method \App\Model\Entity\MapPelicula get($primaryKey, $options = [])
 * @method \App\Model\Entity\MapPelicula newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MapPelicula[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MapPelicula|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MapPelicula patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MapPelicula[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MapPelicula findOrCreate($search, callable $callback = null, $options = [])
 */
class MapPeliculasTable extends Table
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

        $this->table('map_peliculas');
        $this->displayField('idPelicula');
        $this->primaryKey('idPelicula');
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
            ->integer('idPelicula')
            ->allowEmpty('idPelicula', 'create');

        $validator
            ->requirePresence('titulo_original', 'create')
            ->notEmpty('titulo_original');

        $validator
            ->requirePresence('titulo_espanol', 'create')
            ->notEmpty('titulo_espanol');

        $validator
            ->date('fecha_estreno_oficial')
            ->requirePresence('fecha_estreno_oficial', 'create')
            ->notEmpty('fecha_estreno_oficial');

        $validator
            ->integer('dur_min')
            ->requirePresence('dur_min', 'create')
            ->notEmpty('dur_min');

        $validator
            ->requirePresence('censura', 'create')
            ->notEmpty('censura');

        $validator
            ->date('fecha_estrenoLA')
            ->requirePresence('fecha_estrenoLA', 'create')
            ->notEmpty('fecha_estrenoLA');

        $validator
            ->requirePresence('sipnosis', 'create')
            ->notEmpty('sipnosis');

        $validator
            ->integer('numero_secuela')
            ->requirePresence('numero_secuela', 'create')
            ->notEmpty('numero_secuela');

        $validator
            ->integer('idPelicula_secuela')
            ->allowEmpty('idPelicula_secuela');

        return $validator;
    }
}
