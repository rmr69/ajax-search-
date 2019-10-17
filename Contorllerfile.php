if ($request->ajax()) {
$output = "";
$profilefolders = DB::table('tbl_folders')->where('folder_uid', 'LIKE', '%' . $request->profileupdate . '%')
->orwhere('order_id', 'LIKE', '%' . $request->profileupdate . '%')
->orwhere('status', 'LIKE', '%' . $request->profileupdate . '%')
->orwhere('created_at', 'LIKE', '%' . $request->profileupdate . '%')
->orwhere('updated_at', 'LIKE', '%' . $request->profileupdate . '%')
->get();

if ($profilefolders) {
foreach ($profilefolders as $key => $profilefolder) {
$output .= '<tr>' .
    '<td>' . $profilefolder->id . '</td>' .
    '<td>' . $profilefolder->folder_uid . '</td>' .
    '<td>' . $profilefolder->order_id . '</td>' .
    '<td>' . $profilefolder->created_at . '</td>' .
    '<td>' . $profilefolder->updated_at . '</td>' .
    '</tr>';
}
return Response($output);
}
}
