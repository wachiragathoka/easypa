<!-- declarations -->
<div id="declarations">
	<fieldset class="">
		<legend>Declarations</legend>
		<div class="form-group">
			<!-- <label for=" " class="col-lg-4 control-label">Declarations</label> -->
			<div class="col-lg-8">
				<!-- declarations table -->

				<table>
					<thead>
						<tr>
							<th><b>Question</b></th>
							<th><b>Tick where applicable</b></th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>1(a) Have you previously held Personal Accident cover?</td>
							<td><select name="previus_cover">
									<option>Select One</option>
									<option value="yes">Yes</option>
									<option value="No">No</option>
							</select></td>
						</tr>
						<tr>
							<td>1(b) If yes above , name the insurer:</td>
							<td><input type="text" name="previus_cover_name"></td>
						</tr>
						<tr>
							<td>2(a) Are you free from any physical disability or mental
								illness to the best of your knowledge ?</td>
							<td><select name="physical_disability">
									<option>Select One</option>
									<option value="yes">Yes</option>
									<option value="No">No</option>
							</select></td>
						</tr>
						<tr>
							<td>2(b) If No above, give details:</td>
							<td><textarea rows="3" cols="10" name="physical_disability_names"></textarea></td>
						</tr>
						<tr>
							<td>3 Give details of all accidents you have sustained in the
								last five (5) years :</td>
							<td><textarea rows="3" cols="10" name="accidents_in_five_years"></textarea></td>
						</tr>
						<tr>
							<td>4(a) Are you engaged in any of the excluded activities /
								occupations?*</td>
							<td><select name="excluded_activities">
									<option>Select One</option>
									<option value="yes">Yes</option>
									<option value="No">No</option>
							</select></td>
						</tr>
						<tr>
							<td>4(b) If Yes, would you like an extension of cover to these
								activities ?*</td>
							<td><select name="excluded_activities_extension">
									<option>Select One</option>
									<option value="yes">Yes</option>
									<option value="No">No</option>
							</select></td>
						</tr>
					</tbody>
				</table>

			</div>

		</div>
	</fieldset>

	<fieldset id="final-declarations" class="">
		<legend>Final Declarations</legend>
		<!-- Final Declaration -->
		<div class="form-group">
			<!-- <label for=" " class="col-lg-4 control-label">Final Declaration</label> -->
			<div class="col-lg-12">

				<table>
					<tbody>
						<tr>
							<td>I warrant that the above statements made by me or on my
								behalf are true and complete to the best of my knowledge and
								belief and I agree that this proposal shall be the basis of the
								contract between me and the company. I also declare that no
								insurer has ever declined, refused to renew, terminated my
								insurance, increased my insurance premium or imposed special
								terms.<br>
							<br> I agree to accept a policy in the company’s usual form for
								this class of insurance <input type="checkbox"
								name="final_declarations" id="final_declarations">
							</td>
						</tr>
					</tbody>
				</table>
				<input type="hidden" name="premiumamount" value=""
					id="premiumamount">
				<p>
					<a class="btn btn-primary" id="to-personal-info">previous</a> <input
						class="btn btn-success" name="Submit" type="submit"
						value="Get My Quote">
				</p>

			</div>
		</div>

	</fieldset>

</div>
