<?php if($data['sunset'] === 'night') { ?>
    @include('partials.home.header-night')
<?php } else { ?>
    @include('partials.home.header-day')
<?php } ?>

