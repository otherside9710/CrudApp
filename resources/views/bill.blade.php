@extends('layouts.app')
@section('content')
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('save')}}" method="POST">
                    {{csrf_field()}}
                    <label>Producto</label>
                    <select class="form-control" name="product" id="">
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                    <label>Cantidad</label>
                    <input type="number" required class="form-control" name="cantidad">
                    <label>Valor Unitario</label>
                    <input type="number" required class="form-control" min="0" name="valor">
                    <label>Descuento %</label>
                    <input type="number" required class="form-control" min="0" name="descuento">
                    <br>
                    <center>
                        <button class="btn btn-outline-success">Guardar</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="table-responsive">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Valor Unitario</th>
                            <th scope="col">Descuento</th>
                            <th scope="col" style="text-align: center">Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bills as $bill)
                            <tr>
                                <th scope="row">{{$bill->id}}</th>
                                <td>{{$bill->nombre_producto}}</td>
                                <td>{{$bill->cantidad}}</td>
                                <td>${{number_format($bill->valor_unitario)}}</td>
                                <td>{{$bill->descuento}}%</td>
                                <td style="text-align: center; width: 110px !important;">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <form action="{{route('updateView', $bill->id)}}">
                                                <input type="hidden" value="123" required class="form-control" name="cantidad">
                                                <button class="btn btn-outline-success"><i class="fa fa-edit"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-md-5">
                                            <form action="{{route('delete', $bill->id)}}">
                                                <button class="btn btn-outline-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
