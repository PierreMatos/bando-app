<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAlbumAPIRequest;
use App\Http\Requests\API\UpdateAlbumAPIRequest;
use App\Models\Album;
use App\Repositories\AlbumRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AlbumController
 * @package App\Http\Controllers\API
 */

class AlbumAPIController extends AppBaseController
{
    /** @var  AlbumRepository */
    private $albumRepository;

    public function __construct(AlbumRepository $albumRepo)
    {
        $this->albumRepository = $albumRepo;
    }

    /**
     * Display a listing of the Album.
     * GET|HEAD /albums
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $albums = $this->albumRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($albums->toArray(), 'Albums retrieved successfully');
    }

    /**
     * Store a newly created Album in storage.
     * POST /albums
     *
     * @param CreateAlbumAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAlbumAPIRequest $request)
    {
        $input = $request->all();

        $album = $this->albumRepository->create($input);

        return $this->sendResponse($album->toArray(), 'Album saved successfully');
    }

    /**
     * Display the specified Album.
     * GET|HEAD /albums/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Album $album */
        $album = $this->albumRepository->find($id);

        if (empty($album)) {
            return $this->sendError('Album not found');
        }

        return $this->sendResponse($album->toArray(), 'Album retrieved successfully');
    }

    /**
     * Update the specified Album in storage.
     * PUT/PATCH /albums/{id}
     *
     * @param int $id
     * @param UpdateAlbumAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlbumAPIRequest $request)
    {
        $input = $request->all();

        /** @var Album $album */
        $album = $this->albumRepository->find($id);

        if (empty($album)) {
            return $this->sendError('Album not found');
        }

        $album = $this->albumRepository->update($input, $id);

        return $this->sendResponse($album->toArray(), 'Album updated successfully');
    }

    /**
     * Remove the specified Album from storage.
     * DELETE /albums/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Album $album */
        $album = $this->albumRepository->find($id);

        if (empty($album)) {
            return $this->sendError('Album not found');
        }

        $album->delete();

        return $this->sendSuccess('Album deleted successfully');
    }
}
