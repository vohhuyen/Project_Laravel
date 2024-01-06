@extends('masterAdmin')
@section('contentAdmin')
            <header class="app-header">
                <b>List of Providers</b>
                <div class="search">
                    <i class="icon_search fa-solid fa-magnifying-glass"></i>
                    <input class="input_search" type="text" placeholder="What do you need? ">
                </div>
                <button class="addproducts" data-toggle="modal" data-target="#btncreate">Create <i
                        class="fa-solid fa-plus"></i></button>
            </header>
            <div class="margin"></div>


            <div class="modal fade" id="btncreate" tabindex="-1" role="dialog"
                aria-labelledby="btn1Title"aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"
                                style="font-family: Arial, Helvetica, sans-serif">Create Provider</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                style="margin-left: 355px">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <form action="providermanagement" method="post" enctype="multipart/form-data"
                                class="form-container">
                                @csrf
                                <div class="form-group">
                                    <label for="note">Name:</label>
                                    <br>
                                    <input id="note" class="inputAddUser" name="Name"
                                        placeholder="Enter your name...."></input>
                                </div>
                                <div class="form-group">
                                    <label for="note">Description:</label>
                                    <br>
                                    <textarea id="note" class="inputAddUser" name="description" placeholder="Enter your description...."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="note">Location:</label>
                                    <br>
                                    <input id="note" class="inputAddUser" name="location"
                                        placeholder="Enter your location...."></input>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="container-fluid">
                    <section id="content">
                        <table class="table table-grey table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($providers as $providers)
                                    <tr>
                                        <td style="padding: 10 10px">{{ $providers->idProvider }}</td>
                                        <td>{{ $providers->Name }}</td>
                                        <td>{{ $providers->description }}</td>
                                        <td>{{ $providers->location }}</td>
                                        <td><button class="update" data-toggle="modal" data-target="#btn{{ $providers->idProvider }}">Update</button></td>
                                        <form action="{{route('deleteprovideradmin',$providers->idProvider )}}" method="post" enctype="multipart/form-data"
                                                    class="form-container">
                                                    @csrf
                                        <td><button class="delete">Delete</button></td>
                                        </form>
                                    </tr>
                                    <div class="modal fade" id="btn{{ $providers->idProvider }}" tabindex="-1" role="dialog"
                                    aria-labelledby="btn1Title"aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"
                                                    style="font-family: Arial, Helvetica, sans-serif">Update Provider</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                    style="margin-left: 355px">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body row">
                                                <form action="editprovideradmin" method="post" enctype="multipart/form-data"
                                                    class="form-container">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="note">ID:</label>
                                                        <br>
                                                        <input id="note" class="inputAddUser" name="idprovider"
                                                            value="{{ $providers->idProvider }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Name:</label>
                                                        <br>
                                                        <input id="note" class="inputAddUser" name="Name"
                                                            placeholder="Enter your name...." value="{{ $providers->Name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Description:</label>
                                                        <br>
                                                        <textarea id="note" class="inputAddUser" value="{{ $providers->description }}" name="description" placeholder="Enter your description....">{{ $providers->description }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Location:</label>
                                                        <br>
                                                        <input id="note" class="inputAddUser" value="{{ $providers->location }}" name="location"
                                                            placeholder="Enter your location....">
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
@endsection  
