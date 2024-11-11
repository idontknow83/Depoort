<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consult;

class ConsultController extends Controller
{
    /**
     * Show permissions management page for consultations.
     */
    public function permissionsPage()
    {
        $consultations = Consult::all();
        return view('consults.permissions', compact('consultations'));
    }

    /**
     * Grant view permission to administration for a consultation.
     */
    public function grantPermissionToAdmin(Consult $consult)
    {
        $consult->view_permission_for_admin = true;
        $consult->save();

        return redirect()->back()->with('success', 'Toegang voor administratie toegekend.');
    }

    /**
     * Revoke view permission from administration for a consultation.
     */
    public function revokePermissionFromAdmin(Consult $consult)
    {
        $consult->view_permission_for_admin = false;
        $consult->save();

        return redirect()->back()->with('success', 'Toegang voor administratie ingetrokken.');
    }
}
// Migration file
Schema::table('consults', function (Blueprint $table) {
    $table->boolean('view_permission_for_admin')->default(false);
});