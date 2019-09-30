<div class="row pv5">
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 pb3">        
        {!! get_the_term_list( get_the_ID(), 'exp_world_region', '<h6>World Regions</h6><ul class="list-group list-group-flush">
            <li class="list-group-item pt-0 pb-0">', '</li>
            <li class="list-group-item pt-0 pb-0">', '</li>
        </ul>' ) !!}
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 pb3">        
        {!! get_the_term_list( get_the_ID(), 'exp_theme', '<h6>Themes</h6><ul class="list-group list-group-flush">
            <li class="list-group-item pt-0 pb-0">', '</li>
            <li class="list-group-item pt-0 pb-0">', '</li>
        </ul>' ) !!}
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 pb3">        
        {!! get_the_term_list( get_the_ID(), 'exp_alliance', '<h6>Alliances</h6><ul class="list-group list-group-flush">
            <li class="list-group-item pt-0 pb-0">', '</li>
            <li class="list-group-item pt-0 pb-0">', '</li>
        </ul>' ) !!}
    </div>
</div>