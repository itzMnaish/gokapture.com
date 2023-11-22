<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ICICI</title>

    <style>

        @font-face {
          font-family: "Almairah";
          src:
            url("./assets/fonts/Almairah 01.ttf") format("truetype"),
            url("./assets/fonts/Almairah 01.otf") format("opentype");
        }

        /* Add your CSS styles for the grids and animations here */

        .name-card {

            /*display: inline-block;

            width: 21px;

            line-height: 0px;

            text-align: center;

             background-color: #f0f0f061; 

             border: 1px solid #ccc; 

             margin: 5px; 

            color: #124a7f;

            font-size: 3px;

            font-family: sans-serif;

            font-weight: 900;*/

            display: inline-block;
/*            width: 70px;*/
            line-height: 0px;
            text-align: center;
            /* background-color: #f0f0f061; */
            /* border: 1px solid #ccc; */
            /* margin: 5px; */
            color: #124a7f;
            font-size: 7px;
            padding: 2px;
            font-family: sans-serif;
            font-weight: 900;

        }

        /*.name-card:nth-child(3n-1){
            font-size: 13px;
            padding: 5px;
        }

        .name-card:nth-child(2n-1){
            font-size: 9px;
            padding: 2px;
        }*/


        .name-card:nth-child(7n-1){
/*            font-size: 10px;*/
            padding-left: 15px !important;
        }

        /*.name-card:nth-child(n-1){
            font-size: 6px;
        }*/


        body, html {

            margin: 0;

            padding: 0;

            height: 100%;

            overflow: hidden; /* Hide scroll bars */

            background: url('./assets/img/bg.jpg');

/*            background-size: contain;*/
            background-size: 100% 100%;

            background-position: center;

            background-repeat: no-repeat;



        }



        /*@keyframes fly-in {

            0% {

                opacity: 0;

                transform: translateY(100%);

            }

            100% {

                opacity: 1;

                transform: translateY(0);

            }

        }*/



        @keyframes slide-in-left-to-right {

           0% {

            transform: translate3d(-13rem, 0px, 0px);

            position:absolute;

        }

        50% {

            /*transform: translate3d(200px, -75px, 60px);*/

            transform: translate3d(-13rem, -12rem, 6rem);

            position:absolute;

        }

        75% {

            /*transform: translate3d(700px, -75px, 60px);*/

            transform: translate3d(-80rem, -12rem, 6rem);

            position:absolute;

        }

        100% {

            transform: translate3d(-80rem, 30rem, 6rem);

            position:absolute;

        }      

        }





        @keyframes slide-in-right-to-left {

          /*0% {

            transform: translate3d(0px, 0px, 0px);        

          }

          50%{

            transform: translate3d(200px, -75px, 60px);

          }

          75%{

            transform: translate3d(700px, -75px, 60px);

          }

          100% {

            transform: translate3d(700px, 300px, 60px);

          }      */



          0% {

            transform: translate3d(10rem, 0px, 0px);

            position:absolute;

        }

        50% {

            /*transform: translate3d(200px, -75px, 60px);*/

            transform: translate3d(10rem, -12rem, 6rem);

            position:absolute;

        }

        75% {

            /*transform: translate3d(700px, -75px, 60px);*/

            transform: translate3d(80rem, -12rem, 6rem);

            position:absolute;

        }

        100% {

            transform: translate3d(80rem, 30rem, 6rem);

            position:absolute;

        }



        }

        

         @keyframes slide-in-left-to-center {

            0% {

                transform: translate3d(20rem, 5rem, 6rem);

                position:absolute;

            }

            50% {

                /*transform: translate3d(200px, -75px, 60px);*/

                transform: translate3d(3rem, 5rem, 6rem);

                position:absolute;

            }

            75% {

                /*transform: translate3d(700px, -75px, 60px);*/

                transform: translate3d(3rem, 5rem, 6rem);

                position:absolute;

            }

            100% {

                transform: translate3d(3rem, 30rem, 6rem);

                position:absolute;

            }  

             

         }

         

         .left-to-center{

             animation: slide-in-left-to-center 10s ease-in-out reverse;

         }

        



        .left-to-right{

            animation: slide-in-left-to-right 10s ease-in-out reverse;

        }



        .right-to-left{

            animation: slide-in-right-to-left 10s ease-in-out reverse;

        }



        



        .left-grid, .right-grid{

            display: flex;

            align-items: center;

            justify-content: center;

            flex-wrap: wrap;

            width: 27%;

            margin-left: -10.9vw

        }

        

        .center-grid{

            width: 60.5%;
            position: absolute;
            top: 16%;
            left: 20%;

        }

    </style>

</head>

<body>

    <div class="center-grid">

        <div class="center-grid-container">

            <!-- Names from the left side will be displayed here -->

        </div>

    </div>

    <div style="display: flex;justify-content: center;align-items: center;">

        <div class="grid">

            <!-- Grid cells will be created here -->

        </div>

    </div>

    

    <div style="display: flex;

    justify-content: center;

    align-items: baseline;

    height: 100%;

    margin-top: 41vh;

    margin-left: -18vw;">
    

    <!-- Left Grid -->

    

    <!-- Right Grid -->

    <div class="right-grid" style="position: absolute;left: 230px;">

        <div class="right-grid-container" >

            <!-- Names from the right side will be displayed here -->

        </div>

    </div>
    <div style="width:25%;">

        

    </div>    

    <div class="left-grid" style="position: absolute;right: 20px;">

        <div class="left-grid-container">

            <!-- Names from the left side will be displayed here -->

        </div>

    </div>

    </div>

    <script>

        // Function to fetch and display names based on the "link" column

        var intial_count = 0;

        var leftCount = 0;

        var rightCount=0;
        var centerCount=0;




        // Get the grid container

const gridContainer = document.querySelector('.grid');



// Define the number of rows and columns

const numRows = 20;

const numCols = 10;

// Define your variables

var initial_count_left = 0;

var initial_count_right = 0;



// Function to fetch and display names based on links

function fetchAndDisplayNames1() {

    gridContainer.innerHTML = '';        

            

            // Iterate over the retrieved names and populate the grid cells based on links

            for (let row = 0; row < numRows; row++) {

                for (let col = 0; col < numCols; col++) {

                    const cell = document.createElement('div');

                    cell.classList.add('cell');

                    gridContainer.appendChild(cell);



                    // Determine whether to add the name to the cell

                    if ((row >= 3 && col < 3)) {                        

                        cell.classList.add('green');

                        // initial_count_left++;

                    } else if ((row >= 3 && col >= 7)) {                        

                        cell.classList.add('red');

                        // initial_count_right++;

                    }

                }

            }



}



// Call the fetchAndDisplayNames function to populate the grid with names

// fetchAndDisplayNames1();









        function fetchAndDisplayNames() {

            fetch('get_names.php')

                .then(response => response.json())

                .then(names => {

                    intial_count = names.length;

                    const leftGridContainer = document.querySelector('.left-grid-container');

                    const rightGridContainer = document.querySelector('.right-grid-container');

                    

                    const centerGridContainer = document.querySelector('.center-grid-container');



                    // Clear existing data in both grids

                    leftGridContainer.innerHTML = '';

                    rightGridContainer.innerHTML = '';

                    centerGridContainer.innerHTML = '';



                    // Initialize counters for left and right sides

                    // leftCount = 0;

                    // rightCount = 0;



                    // Iterate through names and add them to the respective grids

                    names.forEach(name => {

                        if (name.link === 'left' && leftCount < 180) {

                            addNameToLeftGridappend(name.name, leftGridContainer);

                            leftCount++;

                        } else if (name.link === 'right' && rightCount < 180) {

                            addNameToRightGridappend(name.name, rightGridContainer);

                            rightCount++;

                        }

                        else{

                            if(centerCount < 100){
                                addNameToCenterGridappend(name.name, centerGridContainer);
                                centerCount++;
                            }
                            

                        }

                    });                    

                })

                .catch(error => {

                    console.error('Error fetching names:', error);

                });

        }

        // Function to add a name to the left grid with fly-in animation

        function addNameToLeftGridappend(name, container) {

            const nameCard = document.createElement('div');

            nameCard.className = 'name-card left-to-right';

            nameCard.style.fontSize = Math.floor(Math.random() * (11 - 6 + 1)) + 6 + 'px';
            nameCard.style.paddingLeft = Math.floor(Math.random() * (6 - 3 + 1)) + 6 + 'px';
            nameCard.textContent = name;

            container.appendChild(nameCard);

        }



        // Function to add a name to the right grid with fly-in animation

        function addNameToRightGridappend(name, container) {

            const nameCard = document.createElement('div');

            nameCard.className = 'name-card right-to-left';
            nameCard.style.fontSize = Math.floor(Math.random() * (11 - 6 + 1)) + 6 + 'px';
            nameCard.style.paddingLeft = Math.floor(Math.random() * (6 - 3 + 1)) + 6 + 'px';
            nameCard.textContent = name;

            container.appendChild(nameCard);

        }

        

        // Function to add a name to the center grid

        function addNameToCenterGridappend(name, container) {

            const nameCard = document.createElement('div');

            nameCard.className = 'name-card left-to-center';

            nameCard.style.fontSize = Math.floor(Math.random() * (11 - 6 + 1)) + 6 + 'px';
            nameCard.style.paddingLeft = Math.floor(Math.random() * (6 - 3 + 1)) + 6 + 'px';

            nameCard.textContent = name;

            container.appendChild(nameCard);

        }

        // Function to add a name to the left grid with fly-in animation

        function addNameToLeftGrid(name, container) {

            const nameCard = document.createElement('div');

            nameCard.className = 'name-card left-to-right';

            // nameCard.style.fontSize = Math.floor(Math.random() * (11 - 6 + 1)) + 6 + 'px';
            nameCard.style.fontSize = Math.floor(Math.random() * (15 - 8 + 1)) + 8 + 'px';
            nameCard.style.paddingLeft = Math.floor(Math.random() * (6 - 3 + 1)) + 6 + 'px';
            nameCard.textContent = name;

            container.prepend(nameCard);

        }



        // Function to add a name to the right grid with fly-in animation

        function addNameToRightGrid(name, container) {

            const nameCard = document.createElement('div');

            nameCard.className = 'name-card right-to-left';
            // nameCard.style.fontSize = Math.floor(Math.random() * (11 - 6 + 1)) + 6 + 'px';
            nameCard.style.fontSize = Math.floor(Math.random() * (15 - 8 + 1)) + 8 + 'px';
            nameCard.style.paddingLeft = Math.floor(Math.random() * (6 - 3 + 1)) + 6 + 'px';
            nameCard.textContent = name;

            container.prepend(nameCard);

        }

        

        // Function to add a name to the center grid

        function addNameToCenterGrid(name, container) {

            const nameCard = document.createElement('div');

            nameCard.className = 'name-card left-to-center';

            // nameCard.style.fontSize = Math.floor(Math.random() * (11 - 6 + 1)) + 6 + 'px';
            nameCard.style.fontSize = Math.floor(Math.random() * (15 - 8 + 1)) + 8 + 'px';
            nameCard.style.paddingLeft = Math.floor(Math.random() * (6 - 3 + 1)) + 6 + 'px';

            nameCard.textContent = name;

            container.prepend(nameCard);

        }



        fetchAndDisplayNames();

// Add a flag to prevent multiple insertions
let isAddingRow = false;



        // Function to check for new entries

        function countRows() {

             if (isAddingRow) {
                    return;
            }

            fetch('row_count.php')

                .then(response => response.json())

                .then(data => {

                    const rowCount = parseInt(data);            

                    // console.log(rowCount);                    

                    if (parseInt(rowCount) > intial_count) {

                        isAddingRow = true;

                        addNewRow();

                    }

                })

                .catch(error => {

                    console.error('Error counting rows:', error);

                });

        }





        // Function to add a new row

        function addNewRow() {

            fetch('get_new_row.php')

                .then(response => response.json())

                .then(newRow => {

                    const leftGridContainer = document.querySelector('.left-grid-container');

                    const rightGridContainer = document.querySelector('.right-grid-container');

                    const centerGridContainer = document.querySelector('.center-grid-container');



                    if (newRow.link === 'left') {

                        // Check if the left grid already has 12 names

                        if (leftCount >= 180) {

                            

                            addNameToCenterGrid(newRow.name, centerGridContainer);
                            intial_count++;

                        }

                        else{

                            addNameToLeftGrid(newRow.name, leftGridContainer);

                            leftCount++;
                            intial_count++;


                        }



                        // Add the new name to the left grid

                        

                    } else if (newRow.link === 'right') {

                        // Check if the right grid already has 12 names

                        if (rightCount >= 180) {

                            

                            addNameToCenterGrid(newRow.name, centerGridContainer);
                            intial_count++;

                        }

                        else{

                            addNameToRightGrid(newRow.name, rightGridContainer);

                            rightCount++;

                            intial_count++;

                        }



                        // Add the new name to the right grid

                         // Reset the flag to allow new insertions
                        isAddingRow = false;
                        

                    }

                })

                .catch(error => {

                    console.error('Error adding new row:', error);

                });

        }

    



        // Set the interval to check for new entries periodically (e.g., every 5 seconds)

        setInterval(countRows, 1500);

    </script>

</body>

</html>

