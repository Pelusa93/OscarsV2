<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapCeremonnias Controller
 *
 * @property \App\Model\Table\MapCeremonniasTable $MapCeremonnias
 */
class MapCeremonniasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapCeremonnias = $this->paginate($this->MapCeremonnias);

        $this->set(compact('mapCeremonnias'));
        $this->set('_serialize', ['mapCeremonnias']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Ceremonnia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapCeremonnia = $this->MapCeremonnias->get($id, [
            'contain' => []
        ]);

        $this->set('mapCeremonnia', $mapCeremonnia);
        $this->set('_serialize', ['mapCeremonnia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapCeremonnia = $this->MapCeremonnias->newEntity();
        if ($this->request->is('post')) {
            $mapCeremonnia = $this->MapCeremonnias->patchEntity($mapCeremonnia, $this->request->data);
            if ($this->MapCeremonnias->save($mapCeremonnia)) {
                $this->Flash->success(__('The map ceremonnia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map ceremonnia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapCeremonnia'));
        $this->set('_serialize', ['mapCeremonnia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Ceremonnia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapCeremonnia = $this->MapCeremonnias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapCeremonnia = $this->MapCeremonnias->patchEntity($mapCeremonnia, $this->request->data);
            if ($this->MapCeremonnias->save($mapCeremonnia)) {
                $this->Flash->success(__('The map ceremonnia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map ceremonnia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapCeremonnia'));
        $this->set('_serialize', ['mapCeremonnia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Ceremonnia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapCeremonnia = $this->MapCeremonnias->get($id);
        if ($this->MapCeremonnias->delete($mapCeremonnia)) {
            $this->Flash->success(__('The map ceremonnia has been deleted.'));
        } else {
            $this->Flash->error(__('The map ceremonnia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
