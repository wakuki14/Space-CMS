&lt;input type="file" name="CF_field_<?php echo $v['id'];?><?php echo $v['allow_mulitple'] == 'T' ? '[]' : null;?>" class="CF-form-field" <?php echo $v['allow_mulitple'] == 'T' ? 'multiple="multiple"' : null;?> lang=<?php echo $v['max_file_size']; ?>/&gt;