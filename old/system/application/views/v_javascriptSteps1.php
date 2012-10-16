<div>
  <p id="errorMessage"></p>
  <form method="post" action="#">
    <fieldset>
      <legend>Future Value Calculator</legend>
      <ol>
        <li>
          <label>Monthly Investment: $</label>
           <input type="text" id="monthInvest" name="monthInvest" />
        </li>
        <li>
          <label>Annual Interest Rate:</label>
          <input type="text" id="annualRate" name="annualRate" />% (below 20)
        </li>
         <li>
          <label>Number of Years:</label>
          <input type="text" id="numYear" name="numYear" /> (below 50)
        </li>
        <li>
          <label>Future Value: $</label>
          <input type="text" id="futureValue" name="futureValue" disabled="true" />
        </li>
        <li>
          <button type='button' name="btnCal" id="btnCal">Calculate</button>
        </li>
      </ol>
    </fieldset>
  </form>
</div>
<script type='text/javascript' src="<?php echo base_url();?>js/test.js"></script>
