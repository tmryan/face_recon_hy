find_package(PostgreSQL REQUIRED)
include_directories( ${PostgreSQL_INCLUDE_DIRS} )
link_directories( ${PostgreSQL_LIBRARY_DIRS} )

#TBB library
include_directories(${TBB_ROOT_DIR}/include)

# Local libraries
include_directories(${LandmarkDetector_SOURCE_DIR}/include)
	
include_directories(../../lib/local/LandmarkDetector/include)
include_directories(../../lib/local/FaceAnalyser/include)	
			
add_executable(FaceLandmarkImg FaceLandmarkImg.cpp)
target_link_libraries(FaceLandmarkImg LandmarkDetector)
target_link_libraries(FaceLandmarkImg FaceAnalyser)
target_link_libraries(FaceLandmarkImg dlib)

target_link_libraries(FaceLandmarkImg ${OpenCV_LIBS} ${Boost_LIBRARIES} ${TBB_LIBRARIES} ${PostgreSQL_LIBRARIES})

install (TARGETS FaceLandmarkImg DESTINATION bin)
