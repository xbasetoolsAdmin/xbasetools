
  					
    
          <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>For Any problem for account after buy just open report and seller will fix it or replace.</li>
            <li>There is <b> 5 </b> Accounts Available.</li>
        </ul>
    </div>
    <input type="hidden" id="cat" name="cat" value="6">
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="table_infos" style="margin-bottom: 10px; margin-top: 5px">infos :</label>
            <select name="table
			  -infos" id="table_infos" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
             
		    <option value="">All</option>
           
		</select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="table_name" style="margin-bottom: 10px; margin-top: 5px">TABLE NAME :</label>
		
            <input type="array_search" class="form-control" id="table_name" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="table_country" style="margin-bottom: 10px; margin-top: 5px">COUNTRY :</label>
            <select name="table_country" id="table_country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
              
		    <option value="">All Countries</option>
            
		</select>
      
	    </div>
       
	    
	    <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
		<label for="table_seller" style="margin-bottom: 10px; margin-top: 5px">Seller :
		    </label>
            <select name="table_seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
		    </select>
	    </div>
      </div>
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
         <div class="col-sm-12 table-responsive">
	        <div id="table" class="dataTables_wrapper no-footer">
                      <div class="dataTables_length" id="table_length">
			   <label>
				   Show
			                  <select name="table_length" aria-controls="table" class=" ">
			                     <option value=" ">  </option>
                                      </select> 
			         entries
			</label>
		    </div>
                <div id="table_filter" class="dataTables_filter">
			<label>Search:<input type="array_search" class="" placeholder="" aria-controls="table_name">
			</label>
		    </div>
                <div id="table_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                <div class="dataTables_scroll">
                    <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">    
                        <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1227.22px; padding-right: 17px;">
                            <table class="display responsive table-hover dataTable no-footer" style="width: 1227.22px; color: var(--font-color); background-color: var(--color-card); margin-left: 0px;" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 37.7604px;" aria-label="ID: activate to sort column ascending">ID</th>
                                        <th data-priority="3" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 155.035px;" aria-label="table_infos: activate to sort column ascending">Website Name</th>
                                        <th data-priority="4" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 95.5729px;" aria-label="table_country: activate to sort column ascending">Country</th>
                                        <th data-priority="7" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 83.6285px;" aria-label="table_name: activate to sort column ascending">Details</th>
                                        <th data-priority="8" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 67.6562px;" aria-label="table_price: activate to sort column ascending">Price</th>
                                        <th data-priority="9" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 72.6562px;" aria-label="table_seller: activate to sort column ascending">Seller</th>
                                        <th data-priority="10" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 86.6146px;" aria-label="table_source: activate to sort column ascending">Source</th>
                                        <th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 70.6597px;" aria-label="table_proof: activate to sort column ascending">Proof</th>
                                        <th data-priority="11" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 142.135px;" aria-label="Date Created: activate to sort column ascending">Date Created</th>
                                        <th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 55.7812px;" aria-label="Buy: activate to sort column ascending">Buy</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                        <table id="table" class="display responsive table-hover dataTable no-footer dtr-inline" style="width: 100%; color: var(--font-color); background-color: var(--color-card);" role="grid" aria-describedby="account_data_info">
                            <thead>
                                <tr role="row" style="height: 0px;">
                                    <th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 37.7604px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						ID
					</div>
                                    </th>
                                    <th data-priority="3" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 155.035px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_name: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Website Name
					</div>
                                    </th>
                                    <th data-priority="4" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 95.5729px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_country: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Country
					</div>
                                    </th>
                                    <th data-priority="7" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 83.6285px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_info: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Details
					</div>
                                    </th>
                                    <th data-priority="8" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 67.6562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_price: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">Price</div>
                                    </th>
                                    <th data-priority="9" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 72.6562px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_seller: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Seller
					</div>
                                    </th>
                                    <th data-priority="10" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 86.6146px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_source: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Source
					</div>
                                    </th>
                                    <th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 70.6597px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="table_proof: activate to sort column ascending">
                                            <div class="dataTables_sizing" style="height:0;overflow:hidden;">
					         Proof
				         </div>
                                    </th>
                                    <th data-priority="11" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 142.135px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="date_created: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Date Created
					    </div>
                                    </th>
                                    <th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 55.7812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Buy: activate to sort column ascending">
                                        <div class="dataTables_sizing" style="height:0;overflow:hidden;">
						Buy
				     </div>
                                    </th>
                                </tr>