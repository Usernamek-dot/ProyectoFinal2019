
 <fieldset>
                   <form action="insertar.php" method="post" id="contactForm" >

                  <div>
                     <label>nombre<span class="required">*</span></label>
                     <input type="text" size="35"  name="nombre">
                  </div>

                  <div>
                     <label >apellido<span class="required">*</span></label>
                     <input type="text"  size="35"  name="apellido">
                  </div>

                  <div>
                     <label>Email <span class="required">*</span></label>
                     <input type="text"  size="35"  name="correo">
                  </div>

                  <div>
                     <label>telefono<span class="required">*</span></label>
                     <input type="text"  size="35"  name="telefono">
                  </div>

                  <div>
                     <label >cargo<span class="required">*</span></label>
                     <input type="text"  size="35"  name="cargo">
                  </div>

                  <div>
                     <label >descripcion <span class="required">*</span></label>
                     <textarea cols="50" rows="15"  name="descripcion"></textarea>
                  </div>

                  <div>
                     <label >generacion<span class="required">*</span></label>
                     <input type="number"  size="35"  name="generacion">
                  </div>

                  <div>
                     <button class="submit">Enviar</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>
               </fieldset>
               </form> <!-- Form End -->