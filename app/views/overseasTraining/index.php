<?php $this->setSiteTitle('Overseas Training');?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class='col-md-6 col-md-offset-3 well'>
    <form class="form" action="" method='post'>
        <h3 class='text-center'>Overseas Training Application</h3><hr>
        <div class="bg-danger"><?= $this->displayErrors?></div>
        <div class="form-group">
            <label for="nameInitial">Name with initials</label>
            <input type='text' id='nameInitial' name='nameInitial' class='form-control' value='<?=currentUser()->nameInitial;?>' readonly="readonly">
        </div>    
        <div class="form-group">
            <label for="regNumber">Register Number</label>
            <input type='text' id='regNumber' name='regNumber' class='form-control' value='<?=currentUser()->regNumber;?>' readonly="readonly">
        </div>    
        <div class="form-group">
            <label for="email">Email</label>
            <input type='text' id='email' name='email' class='form-control' value='<?=currentUser()->email;?>' readonly="readonly">
        </div>    
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type='text' id='contact' name='contact' class='form-control' value='<?=currentUser()->contact;?>' readonly="readonly">
        </div>    
        <div class="form-group">
            <label for="field">Field</label>
            <select id='field' name='field' class='form-control'>
                <option value='Anesthesiologist'>Anesthesiologist</option>
                <option value='Allergist'>Allergist</option>
                <option value='Cardiologist'>Cardiologist</option>
                <option value='Pediatricians'>Pediatricians</option>
            </select>
        </div>
        <div class="form-group">
            <label for="arrival">Date Of Arrival</label>
            <input type='date' id='arrival' name='arrival' class='form-control' value='<?=$this->post['arrival']?>'>
        </div>   
        <div class="form-group">
            <label for="departure">Date Of Departure</label>
            <input type='date' id='departure' name='departure' class='form-control' value='<?=$this->post['departure']?>' >
        </div>
        
        <div class='pull-right'>
            <input type='submit' class='btn btn-primary btn-large' value='Submit'>
        </div>
        
    </form>
</div>

<?php $this->end(); ?>