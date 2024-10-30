<<<<<<< HEAD
<?php 
 if (isset($_SESSION['mensagem'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['mensagem']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['mensagem']);
    endif; ?>    
=======
<?php 
 if (isset($_SESSION['mensagem'])):
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['mensagem']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['mensagem']);
    endif; ?>    
>>>>>>> 1a76b486b451fef5c5980b758b8f0e19301af34b
