<!DOCTYPE html>
<html>
    <head>
      
    </head>
    <body>
        <form action="insert.php" method="post">
            <div>
              <label for="selectFlight">Select Your Flight</label>
              <select id="selectFlight" name="flight">
                  <option value="Alpha">Alpha</option>
                  <option value="Bravo">Bravo</option>
                  <option value="Charlie">Charlie</option>
                  <option value="Delta">Delta</option>
                  <option value="Echo">Echo</option>
                  <option value="Foxtrot">Foxtrot</option>
                  <option value="Zulu">Zulu</option>
              </select>
                
              <label for="selectRole">Select Your Positon</label>
              <select id="selectRole" name="cadet_role">
                  <option value="Corps Commander">Corps Commander</option>
                  <option value="Deputy Corps Commander">Deputy Corps Commanader</option>
                  <option value="Director of Staff">Director of Staff</option>
                  <option value="Red Squadron Commander">Red Squadron Commander</option>
                  <option value="Blue Squadron Commander">Blue Squadron Commander</option>
                  <option value="Flight Commander">Flight Commander</option>
                  <option value="Flight Sargent">Flight Sargent</option>
                  <option value="N/A">N/A</option>
              </select>
                
              <label for="firstName">Enter Your First Name Here</label>
              <input type="text" id="firstName" name="cadet_first_name">
              
              <label for="lastName">Enter Your Last Name Here</label>   
              <input type="text" id="lastName" name="cadet_last_name">

              <label for="selectRank">Select Your Rank</label>  
              <select id="selectRank" name="cadet_rank">
                  <option value="c/AB">Cadet/Airman Basic</option>
                  <option value="c/Amn">Cadet/Airman</option>
                  <option value="c/A1C">Cadet/Airman First Class</option>
                  <option value="c/SrA">Cadet/Senior Airman</option>
                  <option value="c/SSgt">Cadet/Staff Sargeant</option>
                  <option value="c/TSgt">Cadet/Technical Sargeant</option>
                  <option value="c/MSgt">Cadet/Master Sargeant</option>
                  <option value="c/SMSgt">Cadet/Senior Master Sargeant</option>
                  <option value="c/CMSgt">Cadet/Chief Master Sargeant</option>
                  <option value="c/2Lt">Cadet/2nd Lieutenant</option>
                  <option value="c/1Lt">Cadet/1st Lieutenant</option>
                  <option value="c/Capt">Cadet/Captain</option>
                  <option value="c/Maj">Cadet/Major</option>
                  <option value="c/LtCol">Cadet/Lieutenant Colonel</option>
                  <option value="c/Col">Cadet/Colonel</option>
              </select>

              <label for="cadetID">Enter Your ID Number</label>
              <input type="number" id="cadetID" name="cadet_id">

              <label for="selectYear">Select how many years have you been in JROTC</label>
              <select id="selectYear" name="cadet_year">
                  <option value="1">1 Year</option>
                  <option value="2">2 Years</option>
                  <option value="3">3 Years</option>
                  <option value="4">4 Years</option>
              </select>

              <label for="selectPassing">Are you passing all of your classes?</label>
              <select id="selectPassing" name="passing">
                  <option value="TRUE">Yes</option>
                  <option value="FALSE">No</option>
              </select>

              <label for="selectPaperwork">Did youu turn in all of your HQ forms</label>
              <select id="selectPaperwork" name="hq_paperwork">
                  <option value="TRUE">Yes</option>
                  <option value="FALSE">No</option>
              </select>  
            </div>
        </form>
    </body>
</html>
