<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPresentadors Controller
 *
 * @property \App\Model\Table\MapPresentadorsTable $MapPresentadors
 */
class MapPresentadorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapPresentadors = $this->paginate($this->MapPresentadors);

        $this->set(compact('mapPresentadors'));
        $this->set('_serialize', ['mapPresentadors']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Presentador id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPresentador = $this->MapPresentadors->get($id, [
            'contain' => []
        ]);

        $this->set('mapPresentador', $mapPresentador);
        $this->set('_serialize', ['mapPresentador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPresentador = $this->MapPresentadors->newEntity();
        if ($this->request->is('post')) {
            $mapPresentador = $this->MapPresentadors->patchEntity($mapPresentador, $this->request->data);
            if ($this->MapPresentadors->save($mapPresentador)) {
                $this->Flash->success(__('The map presentador has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map presentador could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPresentador'));
        $this->set('_serialize', ['mapPresentador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Presentador id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPresentador = $this->MapPresentadors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPresentador = $this->MapPresentadors->patchEntity($mapPresentador, $this->request->data);
            if ($this->MapPresentadors->save($mapPresentador)) {
                $this->Flash->success(__('The map presentador has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map presentador could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPresentador'));
        $this->set('_serialize', ['mapPresentador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Presentador id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPresentador = $this->MapPresentadors->get($id);
        if ($this->MapPresentadors->delete($mapPresentador)) {
            $this->Flash->success(__('The map presentador has been deleted.'));
        } else {
            $this->Flash->error(__('The map presentador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
