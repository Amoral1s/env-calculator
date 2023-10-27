<?php get_header(); ?>

<section class="calc container">
  <h1 class="title">
    РАСЧЕТ РЕЙТИНГА ESG
  </h1>
  <div class="calc-wrapper">
    <div class="step registation">
      <div class="calc-wrapper-item" >
        <b class="title">Регистрация</b>
        <div class="label">Данные компании</div>
        <input type="text" id="company_name" placeholder="Название организации">
        <div class="select">
          <select name="company_cat" id="company_cat">
            <option></option>
            <option value="not_fin">Нефинансовые компании</option>
            <option value="fin">Финансовые компании</option>
          </select>
        </div>
        <div class="select hidden">
          <select name="company_cat_ne_fin" id="company_cat_ne_fin">
            <option></option>
            <?php if(have_rows('fin', 'options')) : while(have_rows('fin', 'options')) : the_row(); ?>
            <option value="<?php the_sub_field('company'); ?>"><?php the_sub_field('company'); ?></option>
            <?php endwhile; endif; ?>
          </select>
        </div>
        <div class="select hidden">
          <select name="company_cat_fin" id="company_cat_fin">
            <option></option>
            <?php if(have_rows('ne_fin', 'options')) : while(have_rows('ne_fin', 'options')) : the_row(); ?>
            <option value="<?php the_sub_field('company'); ?>"><?php the_sub_field('company'); ?></option>
            <?php endwhile; endif; ?>
          </select>
        </div>
        <div class="button start unactive">
          Начать опрос
        </div>
      </div>
    </div>
    <!-- /.registation -->
    <div class="step block_E" id="block_E" style="display: none">
      <div class="bread">
        <div class="item active">
          <div class="num">1</div>
          <div class="text ">Блок Е</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item">
          <div class="num">2</div>
          <div class="text">Блок S</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item">
          <div class="num">3</div>
          <div class="text">Блок G</div>
        </div>
      </div>
      <?php if(have_rows('block_E', 'options')) : while(have_rows('block_E', 'options')) : the_row(); ?>
      <div class="calc-wrapper-item" data-id="<?php the_sub_field('value'); ?>">
        <b class="title">
          <?php the_sub_field('title'); ?>
        </b>
        <div class="questions">
          <?php if(have_rows('question')) : while(have_rows('question')) : the_row(); ?>
          <div class="questions-item" data-id="<?php the_sub_field('id'); ?>" data-text="<?php the_sub_field('title'); ?>">
            <div class="questions-item-title">
              <?php if (get_sub_field('quote')) { ?> 
              <div class="quote-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 6.66675V10.8334" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.99512 13.3333H10.0026" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="quote">
                  <?php the_sub_field('quote'); ?>
                </div>
              </div>
              <?php } ?>
              <b><?php the_sub_field('title'); ?></b>
            </div>
            <div class="questions-item-content">
              <?php 
              $index = 1;
              $question_id = get_sub_field('id');
              if(have_rows('answers')) : while(have_rows('answers')) : the_row(); ?>
              <div class="item">
                <input type="radio" id="<?php echo $question_id . '-' . $index;  ?>" name="<?php echo $question_id;  ?>" value="<?php the_sub_field('ball'); ?>">
                <label for="<?php echo $question_id . '-' . $index; $index++;  ?>">
                  <?php the_sub_field('answer'); ?>
                </label>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <div class="button next">
          Далее
      </div>
    </div>
    <!-- /.block_E -->
    <div class="step block_E_fin" id="block_E" style="display: none">
      <div class="bread">
        <div class="item active">
          <div class="num">1</div>
          <div class="text ">Блок Е</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item">
          <div class="num">2</div>
          <div class="text">Блок S</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item">
          <div class="num">3</div>
          <div class="text">Блок G</div>
        </div>
      </div>
      <?php if(have_rows('block_E_fin', 'options')) : while(have_rows('block_E_fin', 'options')) : the_row(); ?>
      <div class="calc-wrapper-item" data-id="<?php the_sub_field('value'); ?>">
        <b class="title">
          <?php the_sub_field('title'); ?>
        </b>
        <div class="questions">
          <?php if(have_rows('question')) : while(have_rows('question')) : the_row(); ?>
          <div class="questions-item" data-id="<?php the_sub_field('id'); ?>" data-text="<?php the_sub_field('title'); ?>"> 
            <div class="questions-item-title">
              <?php if (get_sub_field('quote')) { ?> 
              <div class="quote-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 6.66675V10.8334" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.99512 13.3333H10.0026" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="quote">
                  <?php the_sub_field('quote'); ?>
                </div>
              </div>
              <?php } ?>
              <b><?php the_sub_field('title'); ?></b>
            </div>
            <div class="questions-item-content">
              <?php 
              $index = 1;
              $question_id = get_sub_field('id');
              if(have_rows('answers')) : while(have_rows('answers')) : the_row(); ?>
              <div class="item">
                <input type="radio" id="<?php echo $question_id . '-' . $index;  ?>" name="<?php echo $question_id;  ?>" value="<?php the_sub_field('ball'); ?>">
                <label for="<?php echo $question_id . '-' . $index; $index++;  ?>">
                  <?php the_sub_field('answer'); ?>
                </label>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <div class="button next">
          Далее
      </div>
    </div>
    <!-- /.block_E_fin -->
    <div class="step block_S" id="block_S" style="display: none">
      <div class="bread">
        <div class="item ">
          <div class="num">1</div>
          <div class="text ">Блок Е</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item active">
          <div class="num">2</div>
          <div class="text">Блок S</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item">
          <div class="num">3</div>
          <div class="text">Блок G</div>
        </div>
      </div>
      <?php if(have_rows('block_S', 'options')) : while(have_rows('block_S', 'options')) : the_row(); ?>
      <div class="calc-wrapper-item" data-id="<?php the_sub_field('value'); ?>">
        <b class="title">
          <?php the_sub_field('title'); ?>
        </b>
        <div class="questions">
          <?php if(have_rows('question')) : while(have_rows('question')) : the_row(); ?>
          <div class="questions-item" data-id="<?php the_sub_field('id'); ?>" data-text="<?php the_sub_field('title'); ?>">
            <div class="questions-item-title">
              <?php if (get_sub_field('quote')) { ?> 
              <div class="quote-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 6.66675V10.8334" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.99512 13.3333H10.0026" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="quote">
                  <?php the_sub_field('quote'); ?>
                </div>
              </div>
              <?php } ?>
              <b><?php the_sub_field('title'); ?></b>
            </div>
            <div class="questions-item-content">
              <?php 
              $index = 1;
              $question_id = get_sub_field('id');
              if(have_rows('answers')) : while(have_rows('answers')) : the_row(); ?>
              <div class="item">
                <input type="radio" id="<?php echo $question_id . '-' . $index;  ?>" name="<?php echo $question_id;  ?>" value="<?php the_sub_field('ball'); ?>">
                <label for="<?php echo $question_id . '-' . $index; $index++;  ?>">
                  <?php the_sub_field('answer'); ?>
                </label>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <div class="button next">
          Далее
      </div>
    </div>
    <!-- /.block_S -->
    <div class="step block_G" id="block_G"style="display: none" >
      <div class="bread">
        <div class="item ">
          <div class="num">1</div>
          <div class="text ">Блок Е</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item">
          <div class="num">2</div>
          <div class="text">Блок S</div>
          <div class="del">
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M1 1L7 7L1 13" stroke="#040404" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <div class="item active">
          <div class="num">3</div>
          <div class="text">Блок G</div>
        </div>
      </div>
      <?php if(have_rows('block_G', 'options')) : while(have_rows('block_G', 'options')) : the_row(); ?>
      <div class="calc-wrapper-item" data-id="<?php the_sub_field('value'); ?>">
        <b class="title">
          <?php the_sub_field('title'); ?>
        </b>
        <div class="questions">
          <?php if(have_rows('question')) : while(have_rows('question')) : the_row(); ?>
          <div class="questions-item" data-id="<?php the_sub_field('id'); ?>" data-text="<?php the_sub_field('title'); ?>">
            <div class="questions-item-title">
              <?php if (get_sub_field('quote')) { ?> 
              <div class="quote-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 6.66675V10.8334" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.99512 13.3333H10.0026" stroke="#8C8C8D" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="quote">
                  <?php the_sub_field('quote'); ?>
                </div>
              </div>
              <?php } ?>
              <b><?php the_sub_field('title'); ?></b>
            </div>
            <div class="questions-item-content">
              <?php 
              $index = 1;
              $question_id = get_sub_field('id');
              if(have_rows('answers')) : while(have_rows('answers')) : the_row(); ?>
              <div class="item">
                <input type="radio" id="<?php echo $question_id . '-' . $index;  ?>" name="<?php echo $question_id;  ?>" value="<?php the_sub_field('ball'); ?>">
                <label for="<?php echo $question_id . '-' . $index; $index++;  ?>">
                  <?php the_sub_field('answer'); ?>
                </label>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <div class="button next calculate">
          Получить результат
      </div>
    </div>
    <!-- /.block_G -->
    <div class="step result"   style="display: none">
      <div class="calc-wrapper-item result-title">
        <b class="title">
          ДАННЫЕ КОМПАНИИ
        </b>
        <span>Название организации</span>
        <p class="company_name">ООО РОМАШКА</p>
        <span>Категория компании</span>
        <p class="company_cat">Строительство</p>
        <span>Сектор компании</span>
        <p class="company_ind">Промышленный сектор</p>
      </div>
      <div class="calc-wrapper-item result-wrap">
        <b class="title">БЛОК Е</b>
        <div class="result-wrap-item">
          <div class="result-wrap-item-bar" >
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_E1"><p>0%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                E1 ЭКОЛОГИЧЕСКИЙ МЕНЕДЖМЕНТ
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_E1"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_E2"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                E2 ВОЗДЕЙСТВИЕ НА ОКРУЖАЮЩУЮ СРЕДУ        
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_E2"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_E3"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                E3 ИСПОЛЬЗОВАНИЕ РЕСУРСОВ        
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_E3"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_E4"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                E4 ПОДВЕРЖЕННОСТЬ КОМПАНИИ РИCKAM, СВЯЗАННЫМ С ОКРУЖАЮЩЕЙ СРЕДОЙ        
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_E4"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_E5"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                E5 ОТВЕТСТВЕННОЕ ФИНАНСИРОВАНИЕ        
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_E5"></div>
          </div>
        </div>
        <b class="title">БЛОК S</b>
        <div class="result-wrap-item">
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_S1"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                S1 ОБЩЕСТВО        
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_S1"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_S2"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                S2 ЧЕЛОВЕЧЕСКИЙ КАПИТАЛ              
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_S2"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_S3"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                S3 ПРАВА ЧЕЛОВЕКА               
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_S3"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_S4"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                S4 КЛИЕНТЫ               
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_S4"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_S5"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                S5 ОТВЕТСТВЕННОЕ ФИНАНСИРОВАНИЕ               
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_S5"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_S6"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                S6 ПОДВЕРЖЕННОСТЬ КОМПАНИИ СОЦИАЛЬНЫМ РИСКАМ                       
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_S6"></div>
          </div>
        </div>
        <b class="title">БЛОК G</b>
        <div class="result-wrap-item">
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G1"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G1 СТРУКТУРА СОБСТВЕННОСТИ        
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G1"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G2"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G2 ИНТЕРЕСЫ И ВЛИЯНИЕ АКЦИОНЕРОВ / УЧАСТНИКОВ                  
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G2"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G3"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G3 СТРАТЕГИЯ                       
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G3"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G4"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G4 ВЗАИМОДЕЙСТВИЕ С ЗАИНТЕРЕСОВАННЫМИ СТОРОНАМИ (СТЕЙКХОЛДЕРАМИ)                     
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G4"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G5"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G5 УПРАВЛЕНИЕ РИСКАМИ И ВНУТРЕННИЙ КОНТРОЛЬ                       
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G5"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G6"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G6 РАСКРЫТИЕ ИНФОРМАЦИИ                               
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G6"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G7"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G7 УПРАВЛЕНИЕ УСТОЙЧИВЫМ РАЗВИТИЕМ                                    
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G7"></div>
          </div>
          <div class="result-wrap-item-bar">
            <div class="left">
              <div class="bar">
                <div class="bar-inner bar_G8"><p>50%</p></div>
              </div>
            </div>
            <div class="right">
              <p>
                G8 УПРАВЛЕНИЕ ОТВЕТСТВЕННЫМ ИНВЕСТИРОВАНИЕМ                                     
              </p>
            </div>
            <div class="moar">
              <div>Подробнее</div>
            </div>
            <div class="mini-bar-wrapper" id="bar_G8"></div>
          </div>
        </div>
      </div>
      <div class="result-diagramm">
        <b class="title">РЕЙТИНГ БЛОКА Е</b>
        <div class="wrap">
          <div class="left left_E">
            <canvas id="chart_E" width="470px" height="230px"></canvas>
            <div class="all">
              <p>Блок Е</p>
              <b id="chart_all_E">0.65</b>
              <p>Высокий</p>
            </div>
          </div>
          <div class="right" id="list_E">
            <div class="result-item" data-id="E1">
              <div class="color" style="background: red"></div>
              <div class="text">
                Е1. ЭКОЛОГИЧЕСКИЙ МЕНЕДЖМЕНТ
              </div>
            </div>
            <div class="result-item" data-id="E2">
              <div class="color" style="background: red"></div>
              <div class="text">
                Е2. ВОЗДЕЙСТВИЕ НА ОКРУЖАЮЩУЮ СРЕДУ
              </div>
            </div>
            <div class="result-item" data-id="E3">
              <div class="color" style="background: red"></div>
              <div class="text">
                Е3. ИСПОЛЬЗОВАНИЕ РЕСУРСОВ
              </div>
            </div>
            <div class="result-item" data-id="E4">
              <div class="color" style="background: red"></div>
              <div class="text">
                Е4. ПОДВЕРЖЕННОСТЬ КОМПАНИИ РИCKAM, СВЯЗАННЫМ С ОКРУЖАЮЩЕЙ СРЕДОЙ
              </div>
            </div>
            <div class="result-item" data-id="E5">
              <div class="color" style="background: red"></div>
              <div class="text">
                Е5. ОТВЕТСТВЕННОЕ ФИНАНСИРОВАНИЕ
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="result-diagramm">
        <b class="title">РЕЙТИНГ БЛОКА S</b>
        <div class="wrap">
          <div class="left left_S">
            <canvas id="chart_S" width="470px" height="230px"></canvas>
            <div class="all">
              <p>Блок S</p>
              <b id="chart_all_S">0.65</b>
              <p>Высокий</p>
            </div>
          </div>
          <div class="right" id="list_S">
            <div class="result-item" data-id="S1">
              <div class="color" style="background: red"></div>
              <div class="text">
                S1. ОБЩЕСТВО
              </div>
            </div>
            <div class="result-item" data-id="S2">
              <div class="color" style="background: red"></div>
              <div class="text">
                S2. ЧЕЛОВЕЧЕСКИЙ КАПИТАЛ
              </div>
            </div>
            <div class="result-item" data-id="S3">
              <div class="color" style="background: red"></div>
              <div class="text">
                S3. ПРАВА ЧЕЛОВЕКА
              </div>
            </div>
            <div class="result-item" data-id="S4">
              <div class="color" style="background: red"></div>
              <div class="text">
                S4. КЛИЕНТЫ 
              </div>
            </div>
            <div class="result-item" data-id="S5">
              <div class="color" style="background: red"></div>
              <div class="text">
                S5. ОТВЕТСТВЕННОЕ ФИНАНСИРОВАНИЕ
              </div>
            </div>
            <div class="result-item" data-id="S6">
              <div class="color" style="background: red"></div>
              <div class="text">
                S6. ПОДВЕРЖЕННОСТЬ КОМПАНИИ СОЦИАЛЬНЫМ РИСКАМ
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="result-diagramm">
        <b class="title">РЕЙТИНГ БЛОКА G</b>
        <div class="wrap">
          <div class="left left_G">
            <canvas id="chart_G" width="470px" height="230px"></canvas>
            <div class="all" style="bottom: 6px">
              <p>Блок G</p>
              <b id="chart_all_G">0.65</b>
              <p>Высокий</p>
            </div>
          </div>
          <div class="right" id="list_G">
            <div class="result-item" data-id="G1">
              <div class="color" style="background: red"></div>
              <div class="text">
                G1. СТРУКТУРА СОБСТВЕННОСТИ 
              </div>
            </div>
            <div class="result-item" data-id="G2">
              <div class="color" style="background: red"></div>
              <div class="text">
                G2. ИНТЕРЕСЫ И ВЛИЯНИЕ АКЦИОНЕРОВ / УЧАСТНИКОВ
              </div>
            </div>
            <div class="result-item" data-id="G3">
              <div class="color" style="background: red"></div>
              <div class="text">
                G3. СТРАТЕГИЯ
              </div>
            </div>
            <div class="result-item" data-id="G4">
              <div class="color" style="background: red"></div>
              <div class="text">
                G4. ВЗАИМОДЕЙСТВИЕ С ЗАИНТЕРЕСОВАННЫМИ СТОРОНАМИ (СТЕЙКХОЛДЕРАМИ)
              </div>
            </div>
            <div class="result-item" data-id="G5">
              <div class="color" style="background: red"></div>
              <div class="text">
                G5. УПРАВЛЕНИЕ РИСКАМИ И ВНУТРЕННИЙ КОНТРОЛЬ
              </div>
            </div>
            <div class="result-item" data-id="G6">
              <div class="color" style="background: red"></div>
              <div class="text">
                G6. РАСКРЫТИЕ ИНФОРМАЦИИ
              </div>
            </div>
            <div class="result-item" data-id="G7">
              <div class="color" style="background: red"></div>
              <div class="text">
                G7. УПРАВЛЕНИЕ УСТОЙЧИВЫМ РАЗВИТИЕМ
              </div>
            </div>
            <div class="result-item" data-id="G9">
              <div class="color" style="background: red"></div>
              <div class="text">
                G8. УПРАВЛЕНИЕ ОТВЕТСТВЕННЫМ ИНВЕСТИРОВАНИЕМ
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="result-diagramm ESG_diagramm">
        <b class="title">РЕЙТИНГ БЛОКА G</b>
        <div class="wrap">
          <div class="left left_G">
            <canvas id="chart_ESG" width="470px" height="230px"></canvas>
            <div class="all" style="bottom: 6px">
              <p>Блок ESG</p>
              <b id="chart_all_ESG">0.65</b>
              <p>Высокий</p>
            </div>
          </div>
          <div class="right" id="list_ESG">
            
          </div>
        </div>
      </div>
      <div class="result-btns">
        <?php echo do_shortcode('[save_as_pdf_pdfcrowd]'); ?>
        <a href="https://www.ra-national.ru/wp-content/uploads/2023/04/meth_esg_-4.0.pdf" target="blank" class="link">
          МЕТОДИКА РАССЧЕТА
        </a>
      </div>
      <div class="get-q">
        <b>Остались вопросы?</b>
        <p>Свяжитесь с нами любым удобным способом</p>
        <div class="links">
          <a href="mailto:info@env.ru" class="email">
            <div class="icon">
            </div>
            info@env.ru
          </a>
          <a href="tel:+7 495 118 4400" class="phone">
            <div class="icon">
            </div>
            +7 495 118 4400
          </a>
        </div>
      </div>
    </div>
    <!-- /.result -->
  </div>
</section>


<?php get_footer(); ?>
