@vite(['resources/js/app.js'])

<div class="row mt-5 pt-5">
    <div class="col-7 mx-auto">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>User Name</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->password}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
