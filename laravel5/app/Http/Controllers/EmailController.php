<?php

namespace App\Http\Controllers;

use App\Repositories\Emailrepository;
use App\Http\Requests\EmailRequest;

class EmailController extends Controller
{

    public function getForm()
	{
		return view('email');
	}

	public function postForm(EmailRequest $request, EmailRepositoryInterface $emailRepository)
	{

		$emailRepository->save($request->input('email'));

		return view('email_ok');
	}

}
