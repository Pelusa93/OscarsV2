<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPeliculas Controller
 *
 * @property \App\Model\Table\MapPeliculasTable $MapPeliculas
 */
class MapPeliculasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapPeliculas = $this->paginate($this->MapPeliculas);

        $this->set(compact('mapPeliculas'));
        $this->set('_serialize', ['mapPeliculas']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Pelicula id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPelicula = $this->MapPeliculas->get($id, [
            'contain' => []
        ]);

        $this->set('mapPelicula', $mapPelicula);
        $this->set('_serialize', ['mapPelicula']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPelicula = $this->MapPeliculas->newEntity();
        if ($this->request->is('post')) {
            $mapPelicula = $this->MapPeliculas->patchEntity($mapPelicula, $this->request->data);
            if ($this->MapPeliculas->save($mapPelicula)) {
                $this->Flash->success(__('The map pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map pelicula could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPelicula'));
        $this->set('_serialize', ['mapPelicula']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Pelicula id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPelicula = $this->MapPeliculas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPelicula = $this->MapPeliculas->patchEntity($mapPelicula, $this->request->data);
            if ($this->MapPeliculas->save($mapPelicula)) {
                $this->Flash->success(__('The map pelicula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map pelicula could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPelicula'));
        $this->set('_serialize', ['mapPelicula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Pelicula id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPelicula = $this->MapPeliculas->get($id);
        if ($this->MapPeliculas->delete($mapPelicula)) {
            $this->Flash->success(__('The map pelicula has been deleted.'));
        } else {
            $this->Flash->error(__('The map pelicula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
