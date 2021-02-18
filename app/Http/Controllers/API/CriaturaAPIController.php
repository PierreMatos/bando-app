<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCriaturaAPIRequest;
use App\Http\Requests\API\UpdateCriaturaAPIRequest;
use App\Models\Criatura;
use App\Repositories\CriaturaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CriaturaController
 * @package App\Http\Controllers\API
 */

class CriaturaAPIController extends AppBaseController
{
    /** @var  CriaturaRepository */
    private $criaturaRepository;

    public function __construct(CriaturaRepository $criaturaRepo)
    {
        $this->criaturaRepository = $criaturaRepo;
    }

    /**
     * Display a listing of the Criatura.
     * GET|HEAD /criaturas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $criaturas = $this->criaturaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($criaturas->toArray(), 'Criaturas retrieved successfully');
    }

    /**
     * Store a newly created Criatura in storage.
     * POST /criaturas
     *
     * @param CreateCriaturaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCriaturaAPIRequest $request)
    {
        $input = $request->all();

        $criatura = $this->criaturaRepository->create($input);

        return $this->sendResponse($criatura->toArray(), 'Criatura saved successfully');
    }

    /**
     * Display the specified Criatura.
     * GET|HEAD /criaturas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Criatura $criatura */
        $criatura = $this->criaturaRepository->find($id);

        if (empty($criatura)) {
            return $this->sendError('Criatura not found');
        }

        return $this->sendResponse($criatura->toArray(), 'Criatura retrieved successfully');
    }

    /**
     * Update the specified Criatura in storage.
     * PUT/PATCH /criaturas/{id}
     *
     * @param int $id
     * @param UpdateCriaturaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCriaturaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Criatura $criatura */
        $criatura = $this->criaturaRepository->find($id);

        if (empty($criatura)) {
            return $this->sendError('Criatura not found');
        }

        $criatura = $this->criaturaRepository->update($input, $id);

        return $this->sendResponse($criatura->toArray(), 'Criatura updated successfully');
    }

    /**
     * Remove the specified Criatura from storage.
     * DELETE /criaturas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Criatura $criatura */
        $criatura = $this->criaturaRepository->find($id);

        if (empty($criatura)) {
            return $this->sendError('Criatura not found');
        }

        $criatura->delete();

        return $this->sendSuccess('Criatura deleted successfully');
    }
}
