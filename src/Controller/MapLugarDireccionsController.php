<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapLugarDireccions Controller
 *
 * @property \App\Model\Table\MapLugarDireccionsTable $MapLugarDireccions
 */
class MapLugarDireccionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapLugarDireccions = $this->paginate($this->MapLugarDireccions);

        $this->set(compact('mapLugarDireccions'));
        $this->set('_serialize', ['mapLugarDireccions']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Lugar Direccion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapLugarDireccion = $this->MapLugarDireccions->get($id, [
            'contain' => ['MapPersonas']
        ]);

        $this->set('mapLugarDireccion', $mapLugarDireccion);
        $this->set('_serialize', ['mapLugarDireccion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapLugarDireccion = $this->MapLugarDireccions->newEntity();
        if ($this->request->is('post')) {
            $mapLugarDireccion = $this->MapLugarDireccions->patchEntity($mapLugarDireccion, $this->request->data);
            if ($this->MapLugarDireccions->save($mapLugarDireccion)) {
                $this->Flash->success(__('The map lugar direccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map lugar direccion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapLugarDireccion'));
        $this->set('_serialize', ['mapLugarDireccion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Lugar Direccion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapLugarDireccion = $this->MapLugarDireccions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapLugarDireccion = $this->MapLugarDireccions->patchEntity($mapLugarDireccion, $this->request->data);
            if ($this->MapLugarDireccions->save($mapLugarDireccion)) {
                $this->Flash->success(__('The map lugar direccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map lugar direccion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapLugarDireccion'));
        $this->set('_serialize', ['mapLugarDireccion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Lugar Direccion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapLugarDireccion = $this->MapLugarDireccions->get($id);
        if ($this->MapLugarDireccions->delete($mapLugarDireccion)) {
            $this->Flash->success(__('The map lugar direccion has been deleted.'));
        } else {
            $this->Flash->error(__('The map lugar direccion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
