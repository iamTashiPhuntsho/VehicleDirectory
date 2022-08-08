<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            @if($header_state == 'all')
                <th>Name</th>
                <th>Employee ID</th>
                <th>Designation</th>
                <th>Job Title</th>
                <th>Vertical</th>
                <th>Department</th>
                <th>Mobile Number</th>
                <th>Extension</th>
                <th>Email</th>
                <th>Flexcube</th>
                <th>Office Location</th>
                <th>Present Address</th>
                <th>Vehicle Number</th>
                <th>Status</th>
            @else
                @foreach($header as $h)
                    <th>
                        {{$h}}
                    </th>
                @endforeach
            @endif
        </tr>
        @if($header_state == 'all')
            @foreach($records as $req)
                <tr>
                    <td>{{ $req->name }}</td>
                    <td>{{ $req->employee_id }}</td>
                    <td>{{ $req->designation }}</td>
                    <td>{{ $req->title }}</td>
                    <td>{{ $req->department->vertical->name }}</td>
                    <td>{{ $req->department->name }}</td>
                    <td>{{ $req->contact->mobile }}</td>
                    <td>{{ $req->contact->extension }}</td>
                    <td>{{ $req->contact->email }}</td>
                    <td>{{ $req->contact->flexcube }}</td>
                    <td>{{ $req->contact->location->name }}</td>
                    <td>{{ $req->present_address }}</td>
                    <td>{{ $req->vehicle_no }}</td>
                    <td>{{ $req->status }}</td>
                </tr>
            @endforeach
        @else
            @foreach($records as $r)
                <tr>
                    @foreach($header as $h)
                        @if($h == 'email' || $h == 'mobile' || $h == 'extension' || $h == 'flexcube' || $h == 'office')
                            @if($h == 'office')
                                <td>{{ $r->contact->location->name }}</td>
                            @else
                                <td>{{ $r->contact->$h }}</td>
                            @endif
                        @elseif($h == 'department')
                            <td>{{ $r->department->name }}</td>
                        @elseif($h == 'vertical')
                            <td>{{ $r->department->vertical->name }}</td>
                        @else
                            <td>{{$r->$h}}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        @endif
    </table>
</body>
</html>