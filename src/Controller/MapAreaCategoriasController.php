<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapAreaCategorias Controller
 *
 * @property \App\Model\Table\MapAreaCategoriasTable $MapAreaCategorias
 */
class MapAreaCategoriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapAreaCategorias = $this->paginate($this->MapAreaCategorias);

        $this->set(compact('mapAreaCategorias'));
        $this->set('_serialize', ['mapAreaCategorias']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Area Categoria id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapAreaCategoria = $this->MapAreaCategorias->get($id, [
            'contain' => []
        ]);

        $this->set('mapAreaCategoria', $mapAreaCategoria);
        $this->set('_serialize', ['mapAreaCategoria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapAreaCategoria = $this->MapAreaCategorias->newEntity();
        if ($this->request->is('post')) {
            $mapAreaCategoria = $this->MapAreaCategorias->patchEntity($mapAreaCategoria, $this->request->data);
            if ($this->MapAreaCategorias->save($mapAreaCategoria)) {
                $this->Flash->success(__('The map area categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map area categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapAreaCategoria'));
        $this->set('_serialize', ['mapAreaCategoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Area Categoria id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapAreaCategoria = $this->MapAreaCategorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapAreaCategoria = $this->MapAreaCategorias->patchEntity($mapAreaCategoria, $this->request->data);
            if ($this->MapAreaCategorias->save($mapAreaCategoria)) {
                $this->Flash->success(__('The map area categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map area categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapAreaCategoria'));
        $this->set('_serialize', ['mapAreaCategoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Area Categoria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapAreaCategoria = $this->MapAreaCategorias->get($id);
        if ($this->MapAreaCategorias->delete($mapAreaCategoria)) {
            $this->Flash->success(__('The map area categoria has been deleted.'));
        } else {
            $this->Flash->error(__('The map area categoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
