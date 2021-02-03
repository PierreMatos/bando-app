<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePostTypeAPIRequest;
use App\Http\Requests\API\UpdatePostTypeAPIRequest;
use App\Models\PostType;
use App\Repositories\PostTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PostTypeController
 * @package App\Http\Controllers\API
 */

class PostTypeAPIController extends AppBaseController
{
    /** @var  PostTypeRepository */
    private $postTypeRepository;

    public function __construct(PostTypeRepository $postTypeRepo)
    {
        $this->postTypeRepository = $postTypeRepo;
    }

    /**
     * Display a listing of the PostType.
     * GET|HEAD /postTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $postTypes = $this->postTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($postTypes->toArray(), 'Post Types retrieved successfully');
    }

    /**
     * Store a newly created PostType in storage.
     * POST /postTypes
     *
     * @param CreatePostTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePostTypeAPIRequest $request)
    {
        $input = $request->all();

        $postType = $this->postTypeRepository->create($input);

        return $this->sendResponse($postType->toArray(), 'Post Type saved successfully');
    }

    /**
     * Display the specified PostType.
     * GET|HEAD /postTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PostType $postType */
        $postType = $this->postTypeRepository->find($id);

        if (empty($postType)) {
            return $this->sendError('Post Type not found');
        }

        return $this->sendResponse($postType->toArray(), 'Post Type retrieved successfully');
    }

    /**
     * Update the specified PostType in storage.
     * PUT/PATCH /postTypes/{id}
     *
     * @param int $id
     * @param UpdatePostTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var PostType $postType */
        $postType = $this->postTypeRepository->find($id);

        if (empty($postType)) {
            return $this->sendError('Post Type not found');
        }

        $postType = $this->postTypeRepository->update($input, $id);

        return $this->sendResponse($postType->toArray(), 'PostType updated successfully');
    }

    /**
     * Remove the specified PostType from storage.
     * DELETE /postTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PostType $postType */
        $postType = $this->postTypeRepository->find($id);

        if (empty($postType)) {
            return $this->sendError('Post Type not found');
        }

        $postType->delete();

        return $this->sendSuccess('Post Type deleted successfully');
    }
}
