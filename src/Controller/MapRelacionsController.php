<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapRelacions Controller
 *
 * @property \App\Model\Table\MapRelacionsTable $MapRelacions
 */
class MapRelacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapRelacions = $this->paginate($this->MapRelacions);

        $this->set(compact('mapRelacions'));
        $this->set('_serialize', ['mapRelacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Relacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapRelacion = $this->MapRelacions->get($id, [
            'contain' => []
        ]);

        $this->set('mapRelacion', $mapRelacion);
        $this->set('_serialize', ['mapRelacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapRelacion = $this->MapRelacions->newEntity();
        if ($this->request->is('post')) {
            $mapRelacion = $this->MapRelacions->patchEntity($mapRelacion, $this->request->data);
            if ($this->MapRelacions->save($mapRelacion)) {
                $this->Flash->success(__('The map relacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map relacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapRelacion'));
        $this->set('_serialize', ['mapRelacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Relacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapRelacion = $this->MapRelacions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapRelacion = $this->MapRelacions->patchEntity($mapRelacion, $this->request->data);
            if ($this->MapRelacions->save($mapRelacion)) {
                $this->Flash->success(__('The map relacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map relacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapRelacion'));
        $this->set('_serialize', ['mapRelacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Relacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapRelacion = $this->MapRelacions->get($id);
        if ($this->MapRelacions->delete($mapRelacion)) {
            $this->Flash->success(__('The map relacion has been deleted.'));
        } else {
            $this->Flash->error(__('The map relacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
