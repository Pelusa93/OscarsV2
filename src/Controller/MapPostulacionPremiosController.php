<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapPostulacionPremios Controller
 *
 * @property \App\Model\Table\MapPostulacionPremiosTable $MapPostulacionPremios
 */
class MapPostulacionPremiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapPostulacionPremios = $this->paginate($this->MapPostulacionPremios);

        $this->set(compact('mapPostulacionPremios'));
        $this->set('_serialize', ['mapPostulacionPremios']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Postulacion Premio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapPostulacionPremio = $this->MapPostulacionPremios->get($id, [
            'contain' => []
        ]);

        $this->set('mapPostulacionPremio', $mapPostulacionPremio);
        $this->set('_serialize', ['mapPostulacionPremio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapPostulacionPremio = $this->MapPostulacionPremios->newEntity();
        if ($this->request->is('post')) {
            $mapPostulacionPremio = $this->MapPostulacionPremios->patchEntity($mapPostulacionPremio, $this->request->data);
            if ($this->MapPostulacionPremios->save($mapPostulacionPremio)) {
                $this->Flash->success(__('The map postulacion premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map postulacion premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPostulacionPremio'));
        $this->set('_serialize', ['mapPostulacionPremio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Postulacion Premio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapPostulacionPremio = $this->MapPostulacionPremios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapPostulacionPremio = $this->MapPostulacionPremios->patchEntity($mapPostulacionPremio, $this->request->data);
            if ($this->MapPostulacionPremios->save($mapPostulacionPremio)) {
                $this->Flash->success(__('The map postulacion premio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map postulacion premio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapPostulacionPremio'));
        $this->set('_serialize', ['mapPostulacionPremio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Postulacion Premio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapPostulacionPremio = $this->MapPostulacionPremios->get($id);
        if ($this->MapPostulacionPremios->delete($mapPostulacionPremio)) {
            $this->Flash->success(__('The map postulacion premio has been deleted.'));
        } else {
            $this->Flash->error(__('The map postulacion premio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
