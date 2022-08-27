<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function messageSend(Request $request)
    {
        if (Auth::check())
        {
            Contact::sendMessage($request);
            return back()->with('message', 'Message send successfully');
        }

        return redirect('/login')->with('error', 'You may login first');

    }


    public function manageMessage ()
    {
        return view('admin.message.manage', [
            'messages' => Contact::latest()->get(),
        ]);
    }

    public function deleteMessage (Request $request, $id)
    {
       Contact::find($id)->delete();
       return back()->with('message', 'Message deleted successfully');

    }


    public function manageStatus ($id)
    {
        $changeItem = Contact::find($id);
        $changeItem->status = $changeItem->status == 'pending' ? 'Read' : 'Pending';
        $changeItem->save();
        return back()->with('message', 'Changed status successfully');
//
//        $status = Contact::find($id);
//        if ($status->status == 'pending')
//        {
//            $status->status = 'Read';
//        }
//        elseif ($status->status == 'Read')
//        {
//            $status->status = 'pending';
//        }
//        $status->save();
//        return back()->with('message', 'Changed status successfully');

    }
}
