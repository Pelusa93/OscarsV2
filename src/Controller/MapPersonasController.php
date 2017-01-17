<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPersonas Controller
 *
 * @property \App\Model\Table\MapPersonasTable $MapPersonas
 */
class MapPersonasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MapLugarDireccions']
        ];
        $mapPersonas = $this->paginate($this->MapPersonas);

        $this->set(compact('mapPersonas'));
        $this->set('_serialize', ['mapPersonas']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Persona id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPersona = $this->MapPersonas->get($id, [
            'contain' => ['MapLugarDireccions']
        ]);

        $this->set('mapPersona', $mapPersona);
        $this->set('_serialize', ['mapPersona']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPersona = $this->MapPersonas->newEntity();
        if ($this->request->is('post')) {
            $mapPersona = $this->MapPersonas->patchEntity($mapPersona, $this->request->data);
            if ($this->MapPersonas->save($mapPersona)) {
                $this->Flash->success(__('The map persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map persona could not be saved. Please, try again.'));
            }
        }
        $mapLugarDireccions = $this->MapPersonas->MapLugarDireccions->find('list', ['limit' => 200]);
        $this->set(compact('mapPersona', 'mapLugarDireccions'));
        $this->set('_serialize', ['mapPersona']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Persona id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPersona = $this->MapPersonas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPersona = $this->MapPersonas->patchEntity($mapPersona, $this->request->data);
            if ($this->MapPersonas->save($mapPersona)) {
                $this->Flash->success(__('The map persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map persona could not be saved. Please, try again.'));
            }
        }
        $mapLugarDireccions = $this->MapPersonas->MapLugarDireccions->find('list', ['limit' => 200]);
        $this->set(compact('mapPersona', 'mapLugarDireccions'));
        $this->set('_serialize', ['mapPersona']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Persona id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPersona = $this->MapPersonas->get($id);
        if ($this->MapPersonas->delete($mapPersona)) {
            $this->Flash->success(__('The map persona has been deleted.'));
        } else {
            $this->Flash->error(__('The map persona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
