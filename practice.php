 <?php $user_birthday = get_post_meta(get_the_ID(), 'user_birthday', true); ?>
           <?php if(!empty($user_birthday)) { ?>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Birthday:</span
              ><span class="text-slate-500"><?php echo $user_birthday; ?></span>
            </li>
            <?php } ?>

            <?php $user_age = get_post_meta(get_the_ID(), 'user_age', true);
            if(!empty($user_age)) { ?>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
              >Age:</span
              ><span class="text-slate-500"><?php echo $user_age; ?></span>
            </li>
            <?php } ?>

            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Address:</span
              ><span class="text-slate-500">Brahmanbaria, Bangladesh</span>
            </li>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Email:</span
              ><span class="text-slate-500">aarifhassan02@gmail.com</span>
            </li>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Phone:</span
              ><span class="text-slate-500">+880-1750-128167</span>
            </li>

            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Nationality:</span
              ><span class="text-slate-500">Bangladeshi</span>
            </li>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Study: </span
              ><span class="text-slate-500">University of Dhaka</span>
            </li>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Degree:</span
              ><span class="text-slate-500">Masters</span>
            </li>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Interest:</span
              ><span class="text-slate-500">Playing, Reading</span>
            </li>
            <li>
              <span class="min-w-[100px] mr-2 inline-block font-bold"
                >Freelance:</span
              ><span class="text-slate-500">Available</span>
            </li>