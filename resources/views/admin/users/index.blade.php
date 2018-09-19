


@extends('layouts.admin')




@section('content')


    <h1>Users</h1>

 <table class="table">
     <thead>
       <tr>
         <th>Id</th>
           <td>Photo</td>
         <th>Name</th>
         <th>Email</th>
           <th>Role</th>
           <th>Active</th>
           <th>Created</th>
           <th>Updated</th>
       </tr>
     </thead>

     <tbody>

     @if($users)

         @foreach($users as $user)
       <tr>
         <td>{{$user->id}}</td>

           {{--<td><img height="50" src="/images/{{$user->photo ? $user->photo->file : 'no user photo'}}" alt=""></td>--}}



          {{-- <td> <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>--}}


           <td><img height="50" src="/images/{{$user->photo ? $user->photo->file : 'no user photo'}}" alt=""></td>

           <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>


           <td>{{$user->email}}</td>

           <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>

           <td>{{$user->is_active==1 ? 'Active' : 'Not active'}}</td>
           <td>{{$user->created_at->diffForHumans()}}</td>
           <td>{{$user->updated_at->diffForHumans()}}</td>
       </tr>

        @endforeach
         @endif

     </tbody>
   </table>


@stop


{{--  <td><img height="50" src="{!!asset($user->photo ? $user->photo->file : 'no user photo')!!}" alt=""></td>--}}
{{--<td><a href="{{route('admin.users.edit'. $user->id)}}">{{$user->name}}</a></td>--}}
{{--   <td>{‌{$user->role ? $user->role->name : 'User has no role'}}</td>--}}
{{-- <td>{{$user->role->name}}</td>--}}