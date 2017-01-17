<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapRolPersonaPeliculas Controller
 *
 * @property \App\Model\Table\MapRolPersonaPeliculasTable $MapRolPersonaPeliculas
 */
class MapRolPersonaPeliculasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapRolPersonaPeliculas = $this->paginate($this->MapRolPersonaPeliculas);

        $this->set(compact('mapRolPersonaPeliculas'));
        $this->set('_serialize', ['mapRolPersonaPeliculas']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Rol Persona Pelicula id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapRolPersonaPelicula = $this->MapRolPersonaPeliculas->get($id, [
            'contain' => []
        ]);

        $this->set('mapRolPersonaPelicula', $mapRolPersonaPelicula);
        $this->set('_serialize', ['mapRolPersonaPelicula']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapRolPersonaPelicula = $this->MapRolPersonaPeliculas->newEntity();
        if ($this->request->is('post')) {
            $mapRolPersonaPelicula = $this->MapRolPersonaPeliculas->patchEntity($mapRolPersonaPelicula, $this->request->data);
            if ($this->MapRolPersonaPeliculas->save($mapRolPersonaPelicula)) {
                $this->Flash->success(__('The map rol persona pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map rol persona pelicula could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapRolPersonaPelicula'));
        $this->set('_serialize', ['mapRolPersonaPelicula']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Rol Persona Pelicula id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapRolPersonaPelicula = $this->MapRolPersonaPeliculas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapRolPersonaPelicula = $this->MapRolPersonaPeliculas->patchEntity($mapRolPersonaPelicula, $this->request->data);
            if ($this->MapRolPersonaPeliculas->save($mapRolPersonaPelicula)) {
                $this->Flash->success(__('The map rol persona pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map rol persona pelicula could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapRolPersonaPelicula'));
        $this->set('_serialize', ['mapRolPersonaPelicula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Rol Persona Pelicula id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapRolPersonaPelicula = $this->MapRolPersonaPeliculas->get($id);
        if ($this->MapRolPersonaPeliculas->delete($mapRolPersonaPelicula)) {
            $this->Flash->success(__('The map rol persona pelicula has been deleted.'));
        } else {
            $this->Flash->error(__('The map rol persona pelicula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
