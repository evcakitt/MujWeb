<!--horni menu -->
                    <!--script pro fungování tlačítka na malých zařízeních-->
                    <script>
                        function prepnoutTridu(element, trida) {
                            if (element.className.match(trida)) {
                                element.className = element.className.replace(trida, "");
                            } else {
                                element.className += " " + trida;
                            }
                        }
                    </script>
                <nav>
                    <div class="horni-menu">
                        <button onclick="prepnoutTridu(this.parentNode, 'zobrazit')">≡</button>
                        <ul class="menu">
                            <li class="okraj-menu">
                                <a href="index.php">Úvod</a>
                            </li>
                            <li class="okraj-menu">
                                <a href="jak-se-najit.php">Jak se najít</a>
                            </li>
                            <li class="okraj-menu">
                                <a href="osamelost.php">Osamělost</a>
                            </li>
                            <li class="okraj-menu">
                                <a href="uzdraveni.php">Uzdravení</a>
                            </li>
                            <li class="okraj-menu">
                                <a href="o_mne.php">O mně</a>
                            </li>
                            <li class="okraj-menu">
                                <a href="individualni-terapie.php">Terapie</a>
                            </li>
                            <li class="okraj-menu">
                                <a href="napiste_mi.php">Napište mi</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                  <div class="stin">
                      <img src="img/stin_pod_menu5.jpg" alt="zableni" height="42" width="1000">
                  </div>
    <!-- konec horni menu -->
