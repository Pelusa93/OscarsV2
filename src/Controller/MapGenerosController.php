<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapGeneros Controller
 *
 * @property \App\Model\Table\MapGenerosTable $MapGeneros
 */
class MapGenerosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapGeneros = $this->paginate($this->MapGeneros);

        $this->set(compact('mapGeneros'));
        $this->set('_serialize', ['mapGeneros']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Genero id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapGenero = $this->MapGeneros->get($id, [
            'contain' => []
        ]);

        $this->set('mapGenero', $mapGenero);
        $this->set('_serialize', ['mapGenero']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapGenero = $this->MapGeneros->newEntity();
        if ($this->request->is('post')) {
            $mapGenero = $this->MapGeneros->patchEntity($mapGenero, $this->request->data);
            if ($this->MapGeneros->save($mapGenero)) {
                $this->Flash->success(__('The map genero has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map genero could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapGenero'));
        $this->set('_serialize', ['mapGenero']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Genero id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapGenero = $this->MapGeneros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapGenero = $this->MapGeneros->patchEntity($mapGenero, $this->request->data);
            if ($this->MapGeneros->save($mapGenero)) {
                $this->Flash->success(__('The map genero has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map genero could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapGenero'));
        $this->set('_serialize', ['mapGenero']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Genero id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapGenero = $this->MapGeneros->get($id);
        if ($this->MapGeneros->delete($mapGenero)) {
            $this->Flash->success(__('The map genero has been deleted.'));
        } else {
            $this->Flash->error(__('The map genero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
