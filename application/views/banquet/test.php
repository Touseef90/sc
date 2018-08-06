<?php $this->load->view('header.php'); ?>
    <h1>Default</h1>

<p>You need just to have a <code>div</code> to build the Raty.</p>

<div id="default"></div>
<div class="highlight"><pre><span class="nt">&lt;div&gt;&lt;/div&gt;</span>
</pre></div>
<div class="highlight"><pre><span class="nx">$</span><span class="p">(</span><span class="s1">'div'</span><span class="p">).</span><span class="nx">raty</span><span class="p">();</span>
</pre></div>
<h1>Score</h1>

<p>Used when we want starts with a saved rating.</p>

<div id="score"></div>
<div class="highlight"><pre><span class="nx">$</span><span class="p">(</span><span class="s1">'div'</span><span class="p">).</span><span class="nx">raty</span><span class="p">({</span> <span class="nx">score</span><span class="o">:</span> <span class="mi">3</span> <span class="p">});</span>
</pre></div>
<h1>Read Only</h1>

<p>You can prevent users to vote. It can be applied with or without <a href="#score">score</a> and all stars will receives the <a href="#hints">hint</a> corresponding of the selected star.<br>
Stop the mouse over the stars to see:</p>

<div id="readOnly"></div>
<div class="highlight"><pre><span class="nx">$</span><span class="p">(</span><span class="s1">'div'</span><span class="p">).</span><span class="nx">raty</span><span class="p">({</span> <span class="nx">readOnly</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span> <span class="nx">score</span><span class="o">:</span> <span class="mi">3</span> <span class="p">});</span>
</pre></div>

  </div>

<script>
$(function() {
    $('#default').raty();
    $('#score').raty({ score: 3 });
    $('#readOnly').raty({ readOnly: true, score: 3 });
});
</script>
<?php $this->load->view('footer.php'); ?>
