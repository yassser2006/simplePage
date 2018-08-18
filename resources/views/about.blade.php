@extends('layouts.app')




@section('content')
    <h1>About</h1>
    <p style="text-align: justify;">Elephant herding optimization is novel algorithm which was presented firstly by Gai-Ge Wang and Suash Deb in 2015. a new kind of swarm-based metaheuristic search method, called Elephant Herding Optimization (EHO), is proposed for solving optimization tasks. The EHO method is inspired by the herding behavior of elephant group. In nature, the elephants belonging to different clans live together under the leadership of a matriarch, and the male elephants will leave their family group when they grow up. These two behaviors can be modelled into two following operators: clan updating operator and separating operator. In EHO, the elephants in each clan are updated by its current position and matriarch through clan updating operator. It is followed by the implementation of the separating operator which can enhance the population diversity at the later search phase. To demonstrate its effectiveness, EHO is benchmarked by fifteen test cases comparing with BBO, DE and GA. The results show that EHO can find the better values on most benchmark problems than those three metaheuristic algorithms. </p>
@endsection