@extends('layouts.app')

@section('content')

    @include('inc.error')

    <h1>Elephant herding optimization</h1>

    <p style="text-align: justify;">In nature, elephants live in social groups.  The structure of these groups consists of number of clans, each clan live under a female leadership of a matriarch. In addition, male elephants live separately from the group and they leave these clans while growing up. To implement this behaviour to solve optimization problems, EHO is simplified into three main rules:


    <ol>
        <li>The population consists of number of clans; each clan has fixed number of male and female elephants.</li>
        <li>Fixed number of male elephants live alone away from the clan by leaving their clans.</li>
        <li>A matriarch female elephant is a leadership of the clan.</li>
    </ol>

    <p style="text-align: justify;">As described in the pseudo code at next figure an initial population of elephants is created randomly, this population is divided into fixed number of clans and sorted according to their fitness then an updating happens to each clan individually.</p>

    <div>
       <img src="/website/public/img/fig.jpg" alt="pseudo code" style="display: block;margin-left: auto;margin-right: auto;width:500px;height:400px;">
   </div>

@endsection

@section('sidebar')
    @parent
    This website built at 2018
    @endsection