{{-- semanas por llenar --}}
<div class="container mt-5">
    <div class="row">

        <?php foreach ($weekDateRanges as $week): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Week <?php echo $week['week_number']; ?></h5>
                        <p class="card-text">
                            <strong>Start Date:</strong> <?php echo $week['start_date']; ?><br>
                            <strong>End Date:</strong> <?php echo $week['end_date']; ?>
                        </p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#weekModal<?php echo $week['week_number']; ?>">
                            Open Modal
                        </a>
                        @include('weeks.modalCreate')
                    </div>
                </div>
            </div>
         <?php endforeach; ?>

    </div>
</div>