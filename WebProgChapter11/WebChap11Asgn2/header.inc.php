
<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
     <h1 class="mdl-layout-title"><span>CRM</span> Admin</h1>
 

     
      <div class="mdl-layout-spacer"></div>
      
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                  
        <label id="tt2" class="material-icons mdl-badge mdl-badge--overlap" data-badge="5">account_box</label>  
        <div class="mdl-tooltip" for="tt2">Messages</div>                     

        <label id="tt3" class="material-icons mdl-badge mdl-badge--overlap" data-badge="4">notifications</label> 
         <div class="mdl-tooltip" for="tt3">Notifications</div>           
                  
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
        
      </div>
    </div>
<header class="mdl-color--blue-grey-200">
  <?php
  $current_time = date('h:i:s A');
  $quotes = array(
    "Be yourself; everyone else is already taken. - Oscar Wilde",
    "You know you're in love when you can't fall asleep because reality is finally better than your dreams. - Dr. Seuss",
    "If you want to live a happy life, tie it to a goal, not to people or things. - Albert Einstein",
    "The only way to do great work is to love what you do. - Steve Jobs",
    "Believe you can and you're halfway there. - Theodore Roosevelt"
  );

  $random_quote = $quotes[array_rand($quotes)];
  ?>
  <p>
    <?php echo $random_quote; ?>
  </p>
  <p style="float:right">The current time is
    <?php echo $current_time; ?>

  


      <h4>Order Summaries</h4>
    </header> 
  </header>




