@extends('masterAdmin') @section('contentAdmin')

<header class="app-header">
    <b>List of original products</b>
    <a href="{{route('addOPr')}}"><button class="addproducts" >Create <i class="fa-solid fa-plus"></i></button></a>
</header>
<div class="margin"></div>
<!--  Header End -->

        <section id="content">
            <table style="width: 100%"  class="table table-white table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>About</th>
                        <th>Detail</th>
                        <th>Delete</th>
                    </tr>
                </thead>
         
                <tbody class="w-100">
                    @foreach($originalproducts as $originalproduct)

                    <tr class="row-12 w-100">
                        <td class="col-1">{{$originalproduct->idOPr}}</td>
                        <td class="col-1">{{$originalproduct->nameOPr}}</td>
                        <td class="col-1">
                            <img
                                src="source/imageOPr/{{$originalproduct->image}}" 
                                alt="product1"
                                style="width: 100px; height: 100px"
                            />
                        </td>
                        <td class="col-2">{{$originalproduct->descriptionOPr}}</td>
                        <td class="col-4">{{$originalproduct->aboutOPr}}</td>
                        <td class="col-1"><button class="update">Detail</button></td>
                        <td class="col-1"><button class="delete">Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

@endsection
