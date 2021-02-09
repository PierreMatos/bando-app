<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGuestAPIRequest;
use App\Http\Requests\API\UpdateGuestAPIRequest;
use App\Models\Guest;
use App\Repositories\GuestRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class GuestController
 * @package App\Http\Controllers\API
 */

class GuestAPIController extends AppBaseController
{
    /** @var  GuestRepository */
    private $guestRepository;

    public function __construct(GuestRepository $guestRepo)
    {
        $this->guestRepository = $guestRepo;
    }

    /**
     * Display a listing of the Guest.
     * GET|HEAD /guests
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $guests = $this->guestRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($guests->toArray(), 'Guests retrieved successfully');
    }

    /**
     * Store a newly created Guest in storage.
     * POST /guests
     *
     * @param CreateGuestAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGuestAPIRequest $request)
    {
        $input = $request->all();

        $guest = $this->guestRepository->create($input);

        return $this->sendResponse($guest->toArray(), 'Guest saved successfully');
    }

    /**
     * Display the specified Guest.
     * GET|HEAD /guests/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Guest $guest */
        $guest = $this->guestRepository->find($id);

        if (empty($guest)) {
            return $this->sendError('Guest not found');
        }

        return $this->sendResponse($guest->toArray(), 'Guest retrieved successfully');
    }

    /**
     * Update the specified Guest in storage.
     * PUT/PATCH /guests/{id}
     *
     * @param int $id
     * @param UpdateGuestAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGuestAPIRequest $request)
    {
        $input = $request->all();

        /** @var Guest $guest */
        $guest = $this->guestRepository->find($id);

        if (empty($guest)) {
            return $this->sendError('Guest not found');
        }

        $guest = $this->guestRepository->update($input, $id);

        return $this->sendResponse($guest->toArray(), 'Guest updated successfully');
    }

    /**
     * Remove the specified Guest from storage.
     * DELETE /guests/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Guest $guest */
        $guest = $this->guestRepository->find($id);

        if (empty($guest)) {
            return $this->sendError('Guest not found');
        }

        $guest->delete();

        return $this->sendSuccess('Guest deleted successfully');
    }
}
