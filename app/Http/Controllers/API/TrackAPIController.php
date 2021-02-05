<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTrackAPIRequest;
use App\Http\Requests\API\UpdateTrackAPIRequest;
use App\Models\Track;
use App\Repositories\TrackRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TrackController
 * @package App\Http\Controllers\API
 */

class TrackAPIController extends AppBaseController
{
    /** @var  TrackRepository */
    private $trackRepository;

    public function __construct(TrackRepository $trackRepo)
    {
        $this->trackRepository = $trackRepo;
    }

    /**
     * Display a listing of the Track.
     * GET|HEAD /tracks
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tracks = $this->trackRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tracks->toArray(), 'Tracks retrieved successfully');
    }

    /**
     * Store a newly created Track in storage.
     * POST /tracks
     *
     * @param CreateTrackAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTrackAPIRequest $request)
    {
        $input = $request->all();

        $track = $this->trackRepository->create($input);

        return $this->sendResponse($track->toArray(), 'Track saved successfully');
    }

    /**
     * Display the specified Track.
     * GET|HEAD /tracks/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Track $track */
        $track = $this->trackRepository->find($id);

        if (empty($track)) {
            return $this->sendError('Track not found');
        }

        return $this->sendResponse($track->toArray(), 'Track retrieved successfully');
    }

    /**
     * Update the specified Track in storage.
     * PUT/PATCH /tracks/{id}
     *
     * @param int $id
     * @param UpdateTrackAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrackAPIRequest $request)
    {
        $input = $request->all();

        /** @var Track $track */
        $track = $this->trackRepository->find($id);

        if (empty($track)) {
            return $this->sendError('Track not found');
        }

        $track = $this->trackRepository->update($input, $id);

        return $this->sendResponse($track->toArray(), 'Track updated successfully');
    }

    /**
     * Remove the specified Track from storage.
     * DELETE /tracks/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Track $track */
        $track = $this->trackRepository->find($id);

        if (empty($track)) {
            return $this->sendError('Track not found');
        }

        $track->delete();

        return $this->sendSuccess('Track deleted successfully');
    }
}
