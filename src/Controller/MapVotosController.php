<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapVotos Controller
 *
 * @property \App\Model\Table\MapVotosTable $MapVotos
 */
class MapVotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapVotos = $this->paginate($this->MapVotos);

        $this->set(compact('mapVotos'));
        $this->set('_serialize', ['mapVotos']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Voto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapVoto = $this->MapVotos->get($id, [
            'contain' => []
        ]);

        $this->set('mapVoto', $mapVoto);
        $this->set('_serialize', ['mapVoto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapVoto = $this->MapVotos->newEntity();
        if ($this->request->is('post')) {
            $mapVoto = $this->MapVotos->patchEntity($mapVoto, $this->request->data);
            if ($this->MapVotos->save($mapVoto)) {
                $this->Flash->success(__('The map voto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map voto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapVoto'));
        $this->set('_serialize', ['mapVoto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Voto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapVoto = $this->MapVotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapVoto = $this->MapVotos->patchEntity($mapVoto, $this->request->data);
            if ($this->MapVotos->save($mapVoto)) {
                $this->Flash->success(__('The map voto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map voto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapVoto'));
        $this->set('_serialize', ['mapVoto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Voto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapVoto = $this->MapVotos->get($id);
        if ($this->MapVotos->delete($mapVoto)) {
            $this->Flash->success(__('The map voto has been deleted.'));
        } else {
            $this->Flash->error(__('The map voto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
