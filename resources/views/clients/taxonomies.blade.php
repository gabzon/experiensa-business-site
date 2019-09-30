<div class="row pv5">
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 pb3">
        <h6>World Regions</h6>
        {!! get_the_term_list( get_the_ID(), 'exp_world_region', '<ul class="list-group list-group-flush">
            <li class="list-group-item pt-0 pb-0">', '</li>
            <li class="list-group-item pt-0 pb-0">', '</li>
        </ul>' ) !!}
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 pb3">
        <h6>Themes</h6>
        {!! get_the_term_list( get_the_ID(), 'exp_theme', '<ul class="list-group list-group-flush">
            <li class="list-group-item pt-0 pb-0">', '</li>
            <li class="list-group-item pt-0 pb-0">', '</li>
        </ul>' ) !!}
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 pb3">
        <h6>Alliances</h6>
        {!! get_the_term_list( get_the_ID(), 'exp_alliance', '<ul class="list-group list-group-flush">
            <li class="list-group-item pt-0 pb-0">', '</li>
            <li class="list-group-item pt-0 pb-0">', '</li>
        </ul>' ) !!}
    </div>
</div>