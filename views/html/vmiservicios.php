<section class="main__paginas_title section section_paginas_title">
    <h1>Mis Servicios</h1>
  
</section>

<section class="main__paginas_body section section_paginas_body">
    <form id="pagBuscar" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="buscar">Buscar</label>
        <input name="filtro" id="buscar" type="text" autocomplete="off" onchange="this.form.submit()" value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : '';?>">
        <label for="registros">Registros</label>
        <input name="limite" id="registros" type="text" autocomplete="off" onchange="this.form.submit()" value="<?php echo isset($_GET['limite']) ? $_GET['limite'] : '';?>">
        <input type="hidden" name="pg" value="11">
    </form>
   
</section>

<section class="main__paginas_body section section_paginas_body">

    <div class="pagina">
            <h4 class="pagina__info">-- Info Servicios --</h4>
            <h4 class="pagina__activa">-- Activa --</h4>
        </div>
    
   
    <div class="pagina">

        <div class="pagina__registro registro">
            
            <p class="registro__col col col_pagid"><b>Nombre:</b>Reparacion Android</p>
            <p class="registro__col col col_pagnom"><b>Valor</b>COP. 25000</p>
            <p class="registro__col col col_pagarc"><b>Estado:</b>Activa</p>
        </div>
        
        <form id="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" class="pagina__checkbox">
                      
                <input type="checkbox" name="" id="" checked>  
                

        </form>
   
    </div>
    <div class="pagina">

<div class="pagina__registro registro">
    
    <p class="registro__col col col_pagid"><b>Nombre:</b>Reparacion Ios</p>
    <p class="registro__col col col_pagnom"><b>Valor</b>COP. 50000</p>
    <p class="registro__col col col_pagarc"><b>Estado:</b>Activa</p>
</div>

<form id="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" class="pagina__checkbox">
              
        <input type="checkbox" name="" id="" checked>  
        

</form>

</div>

</section>

